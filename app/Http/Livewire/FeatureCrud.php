<?php

namespace App\Http\Livewire;

use App\Models\Feature;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FeatureCrud extends Component
{
    use WithFileUploads;

    public $title, $desc, $image, $selected;
    protected $listeners = [
        'resetModal',
        'resetFilepond'
    ];

    public function render()
    {
        $dataFeature = Feature::all();
        return view('livewire.feature-crud', compact('dataFeature'));
    }

    public function rules() {
        return [
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|max:1024',
        ];
    }

    public function store() {
        $this->validate();

        $filename = $this->image->store('/feature', 'img');

        Feature::create([
            'title' => $this->title,
            'desc' => $this->desc,
            'image' => $filename,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('closeModal', ['modal' => 'add']);
        $this->resetFilepond();
    }

    public function edit($id) {
        $feature = Feature::find($id);
        $this->selected = $id;
        $this->title = $feature->title;
        $this->desc = $feature->desc;
        $this->dispatchBrowserEvent('showModal', ['modal' => 'edit']);
    }

    public function update() {
        $this->validateOnly('title');
        $this->validateOnly('desc');

        $feature = Feature::find($this->selected);
        $feature->update([
            'title' => $this->title,
            'desc' => $this->desc,
        ]);

        if($this->image) {

            if (Storage::disk('img')->exists($feature->image)) {
                Storage::disk('img')->delete($feature->image);
            }

            $filename = $this->image->store('/feature', 'img');
            $feature->update([
                'image' => $filename,
            ]);

        }

        $this->reset();
        $this->resetFilepond();
        $this->dispatchBrowserEvent('closeModal', ['modal' => 'edit']);
    }

    public function destroy()
    {
        $this->selected->delete();
        Storage::disk('img')->delete($this->selected->image);
        $this->dispatchBrowserEvent('closeModal', ['modal' => 'delete']);
    }

    public function selectItem($id)
    {
        $feature = Feature::find($id);
        $this->selected = $feature;
    }

    public function resetModal()
    {   
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function resetFilepond()
    {
        $this->dispatchBrowserEvent('reset-filepond');
    }
}
