<header class="header-area header-v2">
    <!-- top bar area start here  -->
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-md-left">
                    <div class="topbar-left">
                        <ul class="social-meida">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center text-md-right">
                    <div class="topbar-right ">
                        <ul>
                            <li class="account dropdown">
                                <a href="#"> <i class="user-icon fas fa-user-circle"></i> Account <i class="angle-down fa fa-angle-down"></i></a>
                                <ul class="dropdon-itme">
                                    <li><a href="sign-in.html">Sign In</a></li>
                                    <li><a href="sign-up.html">Sign Up</a></li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                    <li><a href="#">profile</a></li>
                                    <li><a href="#">notifications</a></li>
                                    <li><a href="#">settings</a></li>
                                    <li><a href="#">log out</a></li>
                                </ul>
                            </li>
                            <li class="currancy dropdown">
                                <a href="#">USD <i class="angle-down fa fa-angle-down"></i></a>
                                <ul class="dropdon-itme">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">BTD</a></li>
                                </ul>
                            </li>
                            <li class="language dropdown">
                                <a href="#"> <img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> English <i class="angle-down fa fa-angle-down"></i></a>
                                <ul class="dropdon-itme">
                                    <li><a href="#"><img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> English</a></li>
                                    <li><a href="#"><img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> Dautch</a></li>
                                    <li><a href="#"><img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> Hindi</a></li>
                                    <li><a href="#"><img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> Bangla</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar area end here  -->
    <!-- header-middle-aera star here   -->
    <div class="header-middle-area">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6 order-0 order-lg-1">
                    <div class="brand-area">
                        <a href="index.html"><img src="{{asset('assets/Mainpage/images/logo1.png')}}" alt="Woomart" /></a>
                    </div>
                </div>
                <div class="col-lg-6  order-2 order-lg-2">
                    <div class="search-area">
                        <form action="#">
                            <div class="search-wrap">
                                <select class="niceselect selct-area search-item">
                                    <option data-display="Product Categories">Product Categories</option>
                                    <option value="1">Product Categories</option>
                                    <option value="2">Wooman's Categories</option>
                                    <option value="3">Man's Categories</option>
                                    <option value="4">Home Categories</option>
                                </select>
                                <div class="form-group search-item-wraper search-item m-0">
                                    <input type="text" class="search-input" id="search" name="%s" placeholder="Search Product..." autocomplete="off" />
                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                    <ul class="autocomplite-box">
                                        <li>Wooman </li>
                                        <li>Man </li>
                                        <li>babye</li>
                                        <li>shart</li>
                                        <li>pant</li>
                                        <li>show</li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 order-1 order-lg-3">
                    <div class="middle-right">
                        <ul>
                            <li>
                                <a href="wishlist.html"><i class="flaticon-heart"></i> <span class="count">1</span> </a>
                            </li>
                            <li>
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart-empty-side-view"></i>
                                    <span class="count">1</span>
                                </a>
                                <span class="card-amount">My Cart - $0.00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle-aera star here   -->
    <!-- header bottom area  start here  -->
    <div class="header-botom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="categories-list-v2 ">
                        <h3 class="catagory-name"><i class="fas fa-bars"></i> All Categories </h3>
                        <ul class="catagory-items">
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c1.svg')}}" alt="icon" /> Men’s Clothing  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c2.svg')}}" alt="icon" /> Women’s Clothing</a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c3.svg')}}" alt="icon" /> Phones & Accessories  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c4.svg')}}" alt="icon" /> Computer, Office Security  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c5.svg')}}" alt="icon" /> Consumer Electronics  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c6.svg')}}" alt="icon" /> Jewelry & Watches  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c7.svg')}}" alt="icon" /> Home Appliance  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c8.svg')}}" alt="icon" /> Bags & Shoes  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c9.svg')}}" alt="icon" /> Toys, Kids & Baby  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                            <li class="has-catagory-submenu">
                                <a href="#"><img src="{{asset('assets/Mainpage/images/icons/c10.svg')}}" alt="icon" /> Sports & Outdoors  <i class="fas fa-angle-right float-right"></i></a>
                                <ul class="catagory-submenu-lsit">
                                    <li><a class="catagory-title" href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                    <li><a href="#">Man Clothing</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a id="menu-bars" class="text-right d-block d-md-none" href="#"><i class="fa fa-bars"></i></a>
                </div>
                <div class="col-lg-9 col-md-9 text-left text-md-right">
                    <nav class="main-menu-area">
                        <ul>
                            <li class="current-menu-item">
                                <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="submenu-items">
                                    <li><a href="index.html">home v1</a></li>
                                    <li><a href="index2.html">home v2</a></li>
                                    <li><a href="index3.html">home v3</a></li>
                                    <li><a href="index4.html">home v4</a></li>
                                    <li><a href="index5.html">home v5</a></li>
                                </ul>
                            </li>
                            <li class="mega-menu-itms position-static">
                                <a href="shop.html">Shop <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu row">
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Men Fashion</a></li>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">T- Shirt</a></li>
                                            <li><a href="#">Pant</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Trowser</a></li>
                                        </ul>                                                                                            
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Women Fashion</a></li>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">T- Shirt</a></li>
                                            <li><a href="#">Pant</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Trowser</a></li>
                                        </ul>                                                                                            
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Electronics</a></li>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">T- Shirt</a></li>
                                            <li><a href="#">Pant</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Trowser</a></li>
                                        </ul>                                                                                            
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Mobile & Laptops</a></li>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">T- Shirt</a></li>
                                            <li><a href="#">Pant</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Trowser</a></li>
                                        </ul>                                                                                            
                                    </li>
                                    <li class="col-12 brad-logo-area">
                                        <div><a href="#"><img src="{{asset('assets/Mainpage/images/brands/clients_logo1.png')}}" alt="clients_logo" /></a></div>
                                        <div><a href="#"><img src="{{asset('assets/Mainpage/images/brands/clients_logo2.png')}}" alt="clients_logo" /></a></div>
                                        <div><a href="#"><img src="{{asset('assets/Mainpage/images/brands/clients_logo3.png')}}" alt="clients_logo" /></a></div>
                                        <div><a href="#"><img src="{{asset('assets/Mainpage/images/brands/clients_logo4.png')}}" alt="clients_logo" /></a></div>
                                        <div><a href="#"><img src="{{asset('assets/Mainpage/images/brands/clients_logo5.png')}}" alt="clients_logo" /></a></div>
                                        <div><a href="#"><img src="{{asset('assets/Mainpage/images/brands/clients_logo6.png')}}" alt="clients_logo" /></a></div>
                                        <div><a href="#"><img src="{{asset('assets/Mainpage/images/brands/clients_logo7.png')}}" alt="clients_logo" /></a></div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="submenu-items">
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="single-shop.html">shop details</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="single-blog.html">blog details</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="cart.html">cart</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="order-track.html">order track</a></li>
                                    <li><a href="sign-in.html">sign in</a></li>
                                    <li><a href="sign-up.html">sign up</a></li>
                                    <li><a href="reset-password.html">reset password</a></li>
                                    <li><a href="terms-conditions.html">terms conditions</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog </a>
                            </li>
                            <li>
                                <a href="contact.html">Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom area  end here  -->
</header>