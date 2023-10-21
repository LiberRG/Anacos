<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Search extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id,
        public string $pathVideo,
        public string $accessMode,
        public string $format,
        public string $title,
        public string $date,
        public string $time,
        public string $chapter,
        // deberia ser array o ya se pasa concatenado?
        public string $pathLogo,
        public string $sponsor,
        
        public string $author,
        public string $registerLink
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search');
    }
}
