
<div class="row">
    <div class="form-group col-md-12">
        <input type="text" wire:model="search" class="form-control" placeholder="Search" >
    </div>

    @foreach ($products as $product)
    <div class="col-md-4 mt-3">
        <div class="card" data-aos="fade-up"
        data-aos-anchor-placement="center-bottom">
            <div class="card-header">
                {{ $product->name }}
            </div>
            <div class="card-body">
                {{ $product->description }}
                <br>
                $ {{ $product->price }}
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <div class="row" >
                        <div class="col-md-6">
                            <button  class="btn btn-primary text-center"><i data-feather="eye"></i></button>
                        </div>
                        <div class="col-md-3">
                            <button  class="btn" style="background-color: #e10294; color:white"><i data-feather="heart"></i></button>
                        </div>
                        <div class="col-md-3">
                            <button wire:click="addToCart({{ $product->id }})" class="btn btn-success"><i data-feather="shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="mt-3 col-md-12">
        {{ $products->links() }}
    </div>
</div>