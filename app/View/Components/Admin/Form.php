<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Form extends Component
{
    public $title;
    public $subtitle;
    public $action;
    public $routeBack;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $subtitle = null, $action = null, $routeBack = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->action = $action;
        $this->routeBack = $routeBack;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.form');
    }
}
