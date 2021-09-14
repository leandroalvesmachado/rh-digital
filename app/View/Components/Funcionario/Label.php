<?php

namespace App\View\Components\Funcionario;

use Illuminate\View\Component;

class Label extends Component
{
    public $for;
    public $class;
    public $name;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for = null, $class = null, $name = null, $required = null)
    {
        $this->for = $for;
        $this->class = $class;
        $this->name = $name;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.funcionario.label');
    }
}
