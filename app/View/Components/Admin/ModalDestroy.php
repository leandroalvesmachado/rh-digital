<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class ModalDestroy extends Component
{
    public $title;
    public $target;
    public $object;
    public $size;
    public $message;
    public $action;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = null,
        $target = null,
        $object = null,
        $size = null,
        $message = null,
        $action = null
    )
    {
        $this->title = $title;
        $this->target = $target;
        $this->object = $object;
        $this->size = $size;
        $this->message = $message;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.modal-destroy');
    }
}
