<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div>
        <i class="fas fa-shopping-bag first-icon"></i>
    </div>
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ">
                <a class="nav-link" href="/sportas">
                    <li class="nav-item">Sportas</li>
                </a>
                <a class="nav-link" href="/laisvalaikis">
                    <li class="nav-item">Laisvalaikis</li>
                </a>
                <a class="nav-link" href="/ekstremalus pojuciai">
                    <li class="nav-item">Ekstremalus pojuciai</li>
                </a>
                {{--        <li class="b"><a href="{{route('product.shoppingCart')}}">Shopping cart</a> </li>--}}
                {{--        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>--}}
                @if(Auth::check())
                    <li class="nav-item"><a class="nav-link" href="/logout">Atsijungti</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="/login">Prisijungti</a></li>
                @endif
                <li class="nav-item"> <a class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
