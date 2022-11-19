<?php

namespace App\Http\Livewire;

use App\Models\Feature;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FeatureCrud extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $title, $desc, $image, $selected;
    protected $listeners = [
        'resetModal',
        'resetFilepond'
    ];
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $dataFeature = Feature::paginate(5);
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
        $this->emit('closeModal', 'add');
        $this->resetFilepond();
    }

    public function edit($id) {
        $feature = Feature::find($id);
        $this->selected = $id;
        $this->title = $feature->title;
        $this->desc = $feature->desc;
        $this->emit('showModal', 'edit');
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
        $this->emit('closeModal', 'edit');
    }

    public function destroy()
    {
        $this->selected->delete();
        Storage::disk('img')->delete($this->selected->image);
        $this->emit('closeModal', 'delete');
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
