<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetailPage extends Component
{
    public $id;

    public function mount($id){
        $this->id  = $id;
    }
    public function render()
    {
        $product = Product::where('id',$this->id)->firstOrFail();
        return view('livewire.product-detail-page',[
            'product'=>$product,
        ]);
    }
}