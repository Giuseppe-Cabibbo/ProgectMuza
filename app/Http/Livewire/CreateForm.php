<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;

class CreateForm extends Component
{
    public $step = 1;
    public $place ='';
    public $date ='';
    public $category ='';
    public $description ='';
    public $where ='';
    public $alarm ='';
    public $people ='';
    public $mode ='';
    public $confirm ='';
    public $info ='';
    
    protected $rules =[
        'place' => 'required',
        'date' => 'required',
        'category' => 'required',
        'description' => 'required',
        'where' => 'required',
        'alarm' => 'required',
        'people' => 'required',
        'mode' => 'required',
        'confirm' => 'required',
        'info' => 'required'
    ];

    public function update($propertyName){
        $this->validateOnly($propertyName);
    }

    public function createForm(){
        
        $this->validate();
        if ($this->step === 1) {
            $this->step = 2;
        } elseif ($this->step === 2) {
            $this->step = 3;
        } elseif ($this->step === 3) {
            $this->step = 4;
        } elseif ($this->step === 4) {
            $this->step = 5;
        } elseif ($this->step === 5) {
            $this->step = 6;
        } elseif ($this->step === 6) {
            $this->step = 7;
        } elseif ($this->step === 7) {
            $this->step = 8;
        } elseif ($this->step === 8) {
            $this->step = 9;
        } else {       
            Form::create([
                'place'=>$this->place,
                'date'=>$this->date,
                'category'=>$this->category,
                'description'=>$this->description,
                'where'=>$this->where,
                'alarm'=>$this->alarm,
                'people'=>$this->people,
                'mode'=>$this->mode,
                'confirm'=>$this->confirm,
                'info'=>$this->info,
            ]);
            
        }
        
        // return redirect
        // ->with('message', 'Hai inviato la tua segnalazione');
    }

    public function createFormStep2() {
        // try {
        $this->step = 3;
        // dd('Record creato con successo');
    // } catch (\Exception $e) {
    //     dd($e->getMessage());
    // }
        // return redirect
        // ->with('message', 'Hai inviato la tua segnalazione');
    }

    public function createFormStep3(){
        $this->step = 4; 
    }

    public function createFormStep4(){
        $this->step = 5; 
    }

    public function createFormStep5(){
        $this->step = 6; 
    }
    public function createFormStep6(){
        $this->step = 7; 
    }

    public function createFormStep7(){
        $this->step = 8; 
    }

    public function createFormStep8(){
        $this->step = 9; 
    }

    public function createFormStep9(){
        $this->step = 10; 
    }

    public function createFormStep10(){
        $this->step = 1; 
    }



    public function nextStep(){
    $this->step++;
    }


    public function render()
    {
        return view('livewire.create-form');
    }
}
