<?php

namespace App\View\Components;

use Illuminate\View\Component;

class item-card extends Component
{

    public $img;
    public $cost;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $cost)
    {
        $this->id = $id;
        $this->img = $img;
        $this->cost = $cost;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.item-card');
    }
}
