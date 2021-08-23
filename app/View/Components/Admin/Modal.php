<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Modal extends Component
{
    public $target;
    public $object;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target, $object)
    {
        $this->target = $target;
        $this->object = $object;
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
