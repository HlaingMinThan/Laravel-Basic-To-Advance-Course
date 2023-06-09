<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class Categories extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categories', [
            'categories' => Category::all(),
            'currentCategory' => Category::whereFirst('slug',);// hardcoding
        ]);
    }
}
