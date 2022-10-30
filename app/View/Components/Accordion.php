<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Accordion extends Component
{

    public $id;
    public $heading;
    public $body;

    public function __construct($heading, $body)
    {
        $this->id = "id".Str::random(8);
        $this->heading = $heading;
        $this->body = $body;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.accordion');
    }
}
