<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Brand</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="/" data-turbolinks-action="replace">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/product" data-turbolinks-action="replace">Product</a>
                </li>
            </ul>
            <span class="form-inline navbar-text">
                <a href="/cart" data-turbolinks-action="replace" class="text-center">
                    <i data-feather="shopping-cart" width="20px"></i>
                    <sup>({{$cartTotal}})</sup>
                </a>
            </span>
        </div>
    </nav>