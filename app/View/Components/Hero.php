<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    public $articles;

    public function __construct(array $articles)
    {
        $this->articles=$articles;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
