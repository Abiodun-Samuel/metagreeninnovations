<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Project extends Component
{
    public $aos;
    public $folder;
    public $description;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($aos, $folder, $description, $image)
    {
        $this->aos = $aos;
        $this->folder = $folder;
        $this->description = $description;
        $this->image = $image;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.project');
    }
}
