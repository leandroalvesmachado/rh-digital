<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Show extends Component
{
    public $title;
    public $subtitle;
    public $routeBack;
    public $object;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = null,
        $subtitle = null,
        $routeBack = null,
        $object = null
    )
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->routeBack = $routeBack;
        $this->object = $object;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.show');
    }
}
