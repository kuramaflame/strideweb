<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputf extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
       public string $id,
       public string $type,
       public string $autocomplete
    )
        {}
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputf');
    }
}

