<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ClientCrud extends Component
{
    use WithFileUploads;

    public $logo, $name, $selected;
    protected $listeners = [
        'resetModal',
        'resetFilepond'
    ];

    public function render()
    {
        $dataClient = Client::all();
        return view('livewire.client-crud', compact('dataClient'));
    }

    public function rules() {
        return [
            'name' => 'required',
            'logo' => 'required|image|max:1024',
        ];
    }

    public function store() {
        $this->validate();

        $filename = $this->logo->store('/client', 'img');

        Client::create([
            'name' => $this->name,
            'logo' => $filename,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('closeModal', ['modal' => 'add']);
        $this->resetFilepond();
    }

    public function edit($id) {
        $client = Client::find($id);
        $this->selected = $id;
        $this->name = $client->name;
        $this->dispatchBrowserEvent('showModal', ['modal' => 'edit']);
    }

    public function update() {
        $this->validateOnly('name');
        $client = Client::find($this->selected);
        $client->update([
            'name' => $this->name,
        ]);

        if($this->logo) {

            if (Storage::disk('img')->exists($client->logo)) {
                Storage::disk('img')->delete($client->logo);
            }

            $filename = $this->logo->store('/client', 'img');
            $client->update([
                'logo' => $filename,
            ]);

        }

        $this->reset();
        $this->dispatchBrowserEvent('closeModal', ['modal' => 'edit']);
        $this->resetFilepond();
    }

    public function destroy()
    {
        $this->selected->delete();
        Storage::disk('img')->delete($this->selected->logo);
        $this->dispatchBrowserEvent('closeModal', ['modal' => 'delete']);
    }
    
    public function selectItem($id)
    {
        $client = Client::find($id);
        $this->selected = $client;
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
