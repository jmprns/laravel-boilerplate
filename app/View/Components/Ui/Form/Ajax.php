<?php

namespace App\View\Components\Ui\Form;

use Illuminate\View\Component;

class Ajax extends Component
{

    public $action, $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action = '', $method = 'GET')
    {
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.form.ajax');
    }
}
