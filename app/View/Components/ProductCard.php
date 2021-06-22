<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    
    public $id;
    public $photo;
    public $name;
    public $price;
    public $discount;
    public $brand;
    public $model;
    public $gender;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $photo, $name, $price, $discount, $brand, $model, $gender)
    {
        $this->id = $id;
        $this->photo = $photo;
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
        $this->brand = $brand;
        $this->model = $model;
        $this->gender = $gender;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-card');
    }
}
