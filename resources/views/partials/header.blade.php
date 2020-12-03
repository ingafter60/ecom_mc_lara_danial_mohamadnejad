<div class="header">
    <div class="header-top">
        <div class="row">
   			<div class="col col-lg-2 col-md-2 col-xs-12 col-sm-2">
                <a href="" class="logo">
                    <h1 class="no-margin">Shopio</h1>
                </a>
            </div>
            <div class="col col-lg-10 col-md-10 col-xs-12 col-sm-10">
            	<form action="" method="GET" class="msf">
					<div class="form-section section-left">
                        <select name="" id="" class="form-control control-select">
                            <option value="">All categories</option>
                            <option value="">Desktops</option>
                            <option value="">Laptops</option>
                        </select>
                        <a href="" class="c-selector form-control"><span class="selector-face">All categories</span><i class="fa fa-caret-down"></i></a>
					</div>
                    <div class="form-section section-mid">
                        <input style="height: 36px;" type="text" name="query" class="form-control control-text" placeholder="Search in products ...">
                    </div>
                    <div class="form-section section-right">
                        <input type="submit" class="form-control control-submit" value="Search">
                    </div>
            	</form>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="row">
            <div class="col col-offset-lg-2 col-offset-md-2 col-lg-6 col-md-6 col-xs12 col-ms-12">
                <ul class="header-nav">
                    <li class="relativ"><a href="" class="categories-toggle">Categories <i class="fa fa-caret-down"></i></a></li>
                    <div class="a-list">
                        <a href="" class="list-item">Electronics</a>
                        <a href="" class="list-item">Desktops</a>
                        <a href="" class="list-item">Laptops</a>
                        <a href="" class="list-item">Watches</a>
                    </div>
                    <li><a href="">Home</a></li>
                    <li><a href="">Track order</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">About us</a></li>
                </ul>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12 col-sm-12">
                <ul class="header-nav multi-line-header-nav">
                    <li>
                        <a href="">
                            <span class="header-nav-line header-nav-line1">Welcome, Sign in</span>
                            <span class="header-nav-line header-nav-line2">Accounts & lists <i class="fa fa-caret-down" style="font-size: 13px"></i></span>
                        </a>
                        <div class="a-list">
                            <a href="" class="kist-item">Account</a>
                            <a href="" class="kist-item">Wish list</a>
                            @if(Auth::check())
                            <a href="{{ route('logout') }}" class="list-item" onclick='event.preventDefault(); this.querySelector("form.logout-form").submit()'>
                            logout
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" class="hide">
                            </form>
                            </a>
                            @else
                            <a href="{{ route('login') }}" class="list-item">Login</a>
                            <a href="{{ route('register') }}" class="list-item">Register</a>
                            @endif
                        </div>
                    </li>
                    <li>
                        <a href="" class="header-nav-bold">Orders</a>
                    </li>
                    <li class="relative">
                        <a href="" class="header-shop">
                            <img src="{{ asset("images/app/cart.png") }}" alt="">
                            <span class="items-count">10</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="" class="header-shop">
                            <img src="{{ asset("images/app/wish-icon.png") }}" alt="">
                            <span class="items-count">12</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

