<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cta extends Component
{
    public $cta;
    public $page;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cta,$page)

    {
        $this->cta = $cta;
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cta');
    }
}
