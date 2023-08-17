<?php

namespace App\View\Components;

use App\Models\Category as ModelsCategory;
use Illuminate\View\Component;

class category extends Component
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
        return view('components.category', [
            'categories' => ModelsCategory::all(),
            'currentCategory' => ModelsCategory::whereSlug(request('category'))->first()
        ]);
    }
}
