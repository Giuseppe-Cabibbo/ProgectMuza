<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;

class CreateForm extends Component
{
    public $place;
    
    protected $rules =[
        'place' => 'required',
    ];

    public function update($propertyName){
        $this->validateOnly($propertyName);
    }

    public function createForm(){
        $this->validate();
        Form::create([
            'place'=>$this->place,
        ]);

        // $this->reset();

        // return redirect('/create-form2');
        // ->with('message', 'Hai inviato la tua segnalazione');
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
