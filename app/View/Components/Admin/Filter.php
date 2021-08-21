<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Filter extends Component
{
    public $title;
    public $subtitle;
    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $subtitle, $route)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.filter');
    }
}
