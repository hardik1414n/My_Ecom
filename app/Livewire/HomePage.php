<?php

namespace App\Livewire;

use App\Models\Brands;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Home Page')]
class HomePage extends Component
{
    public function render()
    {
        $brands = Brands::where('is_active',1)->get();
        $categories = Category::where('is_active',1)->get();
        return view('livewire.home-page',[
            'brands'=>$brands,
            'categories'=>$categories,
        ]);
    }
}