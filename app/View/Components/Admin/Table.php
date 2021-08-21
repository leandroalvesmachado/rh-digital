<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Table extends Component
{
    public $title;
    public $subtitle;
    public $model;
    public $headers;
    public $records;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $subtitle, $model, $headers, $records)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->model = $model;
        $this->headers = $headers;
        $this->records = $records;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.table');
    }
}
