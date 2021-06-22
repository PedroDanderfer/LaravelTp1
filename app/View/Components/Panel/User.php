<?php

namespace App\View\Components\Panel;

use Illuminate\View\Component;

class User extends Component
{

    public $id;
    public $name;
    public $surname;
    public $email;
    public $admin;
    public $seller;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $surname, $email, $admin, $seller)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->admin = $admin;
        $this->seller = $seller;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.panel.user');
    }
}
