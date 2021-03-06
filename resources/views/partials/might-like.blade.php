 <!-- Related Products Section End -->
 <div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($mightAlsoLike as $product)
                
           
            <div class="col-lg-3 col-sm-6">
                  <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('img/products/'.$product->slug.'.webp')}}" alt="">
                        <div class="sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <form id="store-submit" action="{{ route('cart.store') }}" method="POST">
                            <ul>
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                            <li class="w-icon active"><a  href="javascript:;" onclick="document.getElementById('store-submit').submit()"><i class="icon_bag_alt"></i></a></li>
                            
                            <li class="quick-view"><a href="{{ $product->path() }}">+ Quick View</a></li>
                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </form>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Coat</div>
                        <a href="#">
                            <a href="{{  route('product.show',$product->slug) }}" ><h5 >{{ $product->name }}</h5></a>
                        </a>
                        <div class="product-price">
                            {{ $product->presentPrice() }}
                            <span>$35.00</span>
                        </div>
                    </div>
                </div>
                    
                
              

            </div>
            
            @endforeach
        </div>
    </div>
</div>
<!-- Related Products Section End -->