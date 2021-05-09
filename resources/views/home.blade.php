
 @extends('layouts.app')
 @section('content')
 <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="{{route('shop.index')}}" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore</p>
                            <a href="{{route('shop.index')}}" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
    <!--  Fetching store categories  -->
            @foreach($categories as $category)
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{asset('img/categories/'.$category->name.'.jpg')}}" alt="">
                        <div class="inner-text">
                            <a href="{{ route('shop.index', ['category' => $category->slug]) }}"><h4>{{$category->name}}</h4></a>
                        </div>
                    </div>
         
                </div>
             @endforeach
                
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>Women’s</h2>
                       
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                   
                    <div class="product-slider owl-carousel">
                        @foreach ($products as $product)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('img/products/'.$product->slug.'.webp')}}" alt="">
                                <div class="sale">Sale</div>
                                <ul>
                                    <li class="w-icon active"><a href="{{route('shop.index')}}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{ $product->path() }}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="{{ $product->path() }}"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="{{ $product->path() }}">
                                    <h5>{{ $product->name }}</h5>
                                </a>
                                <div class="product-price">
                                    {{ $product->presentPrice() }}
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach ($products as $product)
                            
                        
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('img/products/'.$product->slug.'.webp')}}" alt="">
                                <div class="sale">Sale</div>
                                <ul>
                                    <li class="w-icon active"><a href="{{route('shop.index')}}"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"></div>
                                <a href="{{ $product->path() }}">
                                    <h5>{{ $product->name }}</h5>
                                </a>
                                <div class="product-price">
                                    {{ $product->presentPrice() }}
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
                        <h2>Men’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

 

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="img/latest-1.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    {{date('l j.M.Y h:i:s a ',strtotime($post->created_at))}}
                                </div>
                                <div class="tag-item">
                                   
                                </div>
                            </div>
                            <a href="{{route('posts.show',$post->id)}}">
                                <h4>{{$post->title}}</h4>
                            </a>
                            <p>{{$post->excerpt()}} </p>
                        </div>
                    </div> 
                </div>
            @endforeach
              
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
    @endsection