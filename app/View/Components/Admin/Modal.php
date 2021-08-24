<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Modal extends Component
{
    public $title;
    public $target;
    public $object;
    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $target = null, $object = null, $size = null)
    {
        $this->title = $title;
        $this->target = $target;
        $this->object = $object;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.modal');
    }
}
