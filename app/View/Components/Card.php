<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public string $id;
    public string $pathImg;     
    public string $nameImg;
    //posible bool
    public string $accessMode;
    //tipo date   
    public string $date;
    public string $title;
    public string $category;
    public string $pathLogo;
    public string $registerLink;

    public function __construct($id, $pathImg, $nameImg, $accessMode, $date, $title, $category, $pathLogo, $registerLink){
        $this->id = $id;
        $this->pathImg = $pathImg;
        $this->nameImg = $nameImg;
        $this->accessMode = $accessMode;
        $this->date = $date;
        $this->title = $title;
        $this->category = $category;
        $this->pathLogo = $pathLogo;
        $this->registerLink = $registerLink;

    }


    // public function ( 
    //     public string $id;
    //     public string $pathImg,
    //     public string $nameImg,
    //     public string $accessMode,    
    //     public string $date,
    //     public string $title,        
    //     public string $category,        
    //     public string $pathLogo,
    //     public string $registerLink
    //     ) { } 

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
