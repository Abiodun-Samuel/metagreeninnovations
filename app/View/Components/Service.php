<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Service extends Component
{
    public $aos;
    public $title;
    public $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($aos, $title, $description)
    {
        $this->aos = $aos;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.service');
    }
}
