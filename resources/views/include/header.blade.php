<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    
                </div>

                <div class="right-top-bar flex-w h-full">
                    
                    
                    @guest
                    <a href="login" class="flex-c-m trans-04 p-lr-25">
                        Login
                    </a>
                    <a href="register" class="flex-c-m trans-04 p-lr-25">
                        Register
                    </a>
                    @else
                    
                    <a id="navbarDropdown"  href="javascript:void(0);" class="flex-c-m trans-04 p-lr-25">
                        Hello  {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <a href="home" class="flex-c-m trans-04 p-lr-25">
                    My Account
                    </a>

                
                    <a class="flex-c-m trans-04 p-lr-25" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                            
                    @endguest
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                
                <!-- Logo desktop -->       
                <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('public/assets/images/icons/logo-01.png')}}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    
                </div>  
            </nav>
        </div>  
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->        
        <div class="logo-mobile">
            <a href="index.html"><img src="{{asset('public/assets/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
        </div>

        

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                     @guest
                    <a href="login" class="flex-c-m trans-04 p-lr-25">
                        Login
                    </a>
                    <a href="register" class="flex-c-m trans-04 p-lr-25">
                        Register
                    </a>
                    @else
                    
                    <a id="navbarDropdown"  href="javascript:void(0);" class="flex-c-m trans-04 p-lr-25">
                        Hello  {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <a href="home" class="flex-c-m trans-04 p-lr-25">
                    My Account
                    </a>

                
                    <a class="flex-c-m trans-04 p-lr-25" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                            
                    @endguest
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li class="active-menu">
                <a href="{{url('/')}}">Home</a>
            </li>

            <li>
                <a href="shop">Shop</a>
            </li>

            <li class="label1" data-label1="Add">
                <a href="add-product">Add Product</a>
            </li>
        </ul>
    </div>

    
</header>