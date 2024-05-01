<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class HomeComponent extends Component
{
    public function render()
    {
        $category = Category::all();
        return view('livewire.home-component',compact('category'))->layout('layouts.base');
    }
}
