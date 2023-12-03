<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use App\Models\EncuestaRespuesta;

class Encuesta extends Component
{
    use WithFileUploads;

    public $p1 = null;
    public $p2 = null;
    public $p3 = null;
    public $p4 = null;
    public $p5 = null;
    public $p6 = null;
    public $p7 = null;
    public $p8 = null;

    public function save(){
        EncuestaRespuesta::create([
            'pregunta1'=> $this->p1,
            'pregunta2'=> $this->p2,
            'pregunta3'=> $this->p3,
            'pregunta4'=> $this->p4,
            'pregunta5'=> $this->p5,
            'pregunta6'=> $this->p6,
            'pregunta7'=> $this->p7,
            'pregunta8'=> $this->p8,
            
        ]);

        $this->reset(['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8']);
    }
    public function render()
    {
        return view('livewire.encuesta');
    }
}
