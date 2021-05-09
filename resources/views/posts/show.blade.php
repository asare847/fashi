
   @extends('layouts.app')
   @section('content')

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>{{$post->title}}</h2>
                            <p> <span>- {{date('l j.M.Y h:i:s a ',strtotime($post->created_at))}}</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="{{asset('img/blog/details/'.$post->id.'.jpg')}}" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>{{$post->body}}
                            </p>
                        </div>
                        
                        <div class="blog-more">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="img/blog/blog-detail-1.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="img/blog/blog-detail-2.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="img/blog/blog-detail-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                     
                        
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
  @endsection
