<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $pageheader;
    public $subpageheader;
    public $pagedescription;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageheader, $subpageheader, $pagedescription)
    {
        $this->pageheader = $pageheader;
        $this->subpageheader = $subpageheader;
        $this->pagedescription = $pagedescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
