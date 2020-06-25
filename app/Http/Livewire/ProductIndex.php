<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;
    public $page = 1;

    protected $updatesQueryString = [
        ['page' => ['except' => 1]],
        ['search' => ['except' => '']],
    ];

    public function render()
    {
        $products=Product::paginate(15);

        if ($this->search !== null) {
            $products = Product::where('name', 'like', '%' . $this->search . '%')
                            ->paginate(15);
                            
        }
    
        return view('livewire.product-index',[
            'products'=>$products,
            ]);
    }
    public function addToCart(int $productId)
    {
        Cart::add(Product::where('id',$productId)->first()); 

        $this->emit('cartAdded');
    }
}
