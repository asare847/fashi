  <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <!-- <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector"> -->
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <!-- <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option> -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{ route('home.index') }}">
                                <img src="{{  asset('img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <!-- <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div> -->
                    </div> 
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                          <!--   <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li> -->
                            <li class="cart-icon">
                                <a href="{{ route('cart.index') }}">
                                    <i class="icon_bag_alt"></i>
                                    @if(Cart::instance('default')->count() > 0)
                                    <span>{{ Cart::instance('default')->count() }}</span>
                                    @endif
                                    
                                </a>
                                @if(Cart::instance('default')->count() > 0)
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach (Cart::content() as $item)
                                                <tr>
                                                    <td class="si-pic"><img src="{{asset('img/products/'.$item->model->slug.'.webp')}}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>{{ presentPrice($item->model->price)}}</p>
                                                            <h6>{{ $item->model->name }}</h6>
                                                        </div>
                                                    </td>
                                                    
                                                    <td class="si-close">
                                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <i class="ti-close"  onclick='this.parentNode.submit(); return false';></i>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>{{presentPrice(Cart::subtotal())}}</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="{{ route('cart.index') }}" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="{{ route('checkout.index') }}" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                                @endif
                            </li>
                            <!-- calling the presentPrice function on to display total on the header -->
                            <li class="cart-price">{{presentPrice(Cart::total())}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
              
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('home.index') }}">Home</a></li>
                        <li><a class="{{Request::is('shop*')?'active':''}}" href="{{ route('shop.index') }}" accesskey="2" title="shop" >Shop</a></li>
                       
                        <li><a href="{{route('posts.index')}}">Blog</a></li>
                        <li><a href="{{route('contact.create')}}">Contact</a></li>
                    
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->