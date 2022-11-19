<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ClientCrud extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $logo, $name, $selected;
    protected $listeners = [
        'resetModal',
        'resetFilepond'
    ];
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $dataClient = Client::paginate(5);
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
        $this->emit('closeModal', 'add');
        $this->resetFilepond();
    }

    public function edit($id) {
        $client = Client::find($id);
        $this->selected = $id;
        $this->name = $client->name;
        $this->emit('showModal', 'edit');
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
        $this->emit('closeModal', 'edit');
        $this->resetFilepond();
    }

    public function destroy()
    {
        $this->selected->delete();
        Storage::disk('img')->delete($this->selected->logo);
        $this->dispatchBrowserEvent('closeModal', 'delete');
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
