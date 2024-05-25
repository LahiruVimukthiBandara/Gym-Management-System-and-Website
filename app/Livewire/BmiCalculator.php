<?php

namespace App\Livewire;

use Livewire\Component;

class BmiCalculator extends Component
{
    public $height;
    public $weight;
    Public $bmi;
    public $age;
    public $gender;

    public function calculate(){
        $this->bmi = $this->weight / ($this->height * $this->height) * 10000;
    }

    public function render()
    {
        return view('livewire.bmi-calculator');
    }
}
