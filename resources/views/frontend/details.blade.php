@extends('layouts.frontend.master')

@section('title', $service->title)
@section('content')
    <ul class="header-main type-1">
        <li class="home"><a href="{{route('home')}}">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </ul>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content " class="col-md-12 col-sm-12 type-1">
            <div class="product-view row">
                <div class="left-content-product col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="content-product-left class-honizol col-md-6 col-sm-12 col-xs-12 ">
                            <div class="large-image  ">
                                <img itemprop="image" class="product-image-zoom" src="{{asset($service->image)}}" data-zoom-image="{{asset($service->image)}}" title="Bint Beef" alt="Bint Beef">
                            </div>

                        </div>

                        <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <h1>{{$service->title}}</h1>
                            </div>
                            <br>
                            <div class="product-box-desc">
                               <p class="text-justify">{{$service->description}}</p>
                            </div>
                            <div class="product-label form-group">
                                <div class="stock">

                                </div>
                                <br>
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">$ {{$service->unit_price}}</span>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="continer">
                            <h4>Price Discussion</h4>
                            @if(\Illuminate\Support\Facades\Auth::check())
                                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 3)
                                     <section class="comment-sec-area pt-80 pb-80">
                                         <div class="container">
                                             <div class="row flex-column">
                                                 <br />
                                                 <form method="post" action="{{route('comment.store',$service->id)}}">
                                                     @csrf
                                                     <input type="hidden" name="provider_id" value="{{$service->provider_id}}">
                                                     <h2 id="review-title">Write Comment Price</h2>
                                                     <div class="contacts-form">
                                                         <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                                             <textarea name="comment" rows="4" class="text-area-messge form-control" placeholder="Enter your Price" aria-required="true" aria-invalid="false"></textarea >
                                                         </div>
                                                         <div class="buttons clearfix">
                                                             <button class="btn btn-info">Save</button>
                                                         </div>
                                                     </div>
                                                 </form>
                                                 <br><br><br>
                                             @if(count($comments) > 0)
                                                 <h5 class="text-uppercase pb-80">Price Discussion Message ({{$service->comments->count()}})</h5>
                                                 @foreach ($comments as $comment)
                                                 @if($comment->user_id == \Illuminate\Support\Facades\Auth::id())
                                                     <div class="comment">
                                                         <div class="comment-list">
                                                             <div class="single-comment justify-content-between d-flex">
                                                                 <div class="user justify-content-between d-flex">
                                                                     <div class="thumb">
                                                                         <img src="{{asset('assets/frontend/images/Admin.png')}}" alt="" width="50px">
                                                                     </div>
                                                                     <div class="desc">
                                                                         <h5><a href="#">{{$comment->user->name}}</a></h5>
                                                                         <p class="date">{{$comment->created_at->format('D, d M Y, H:i')}}</p>
                                                                         <p class="comment">
                                                                             {{$comment->comment}}
                                                                         </p>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <br>

                                                             @foreach ($commentsreply as $reply)
                                                                 @if($reply->comment_id == $comment->id)
                                                                 <div class="comment-list left-padding" style="margin-left: 3%">
                                                                     <div
                                                                         class="single-comment justify-content-between d-flex">
                                                                         <div class="user justify-content-between d-flex">
                                                                             <div class="thumb">
                                                                                 <img src="{{asset('assets/frontend/images/profilepic.png')}}" alt="" width="50px"/>
                                                                             </div>
                                                                             <div class="desc">
                                                                                 <h5><a href="#">Provider</a></h5>
                                                                                 <p class="date">{{$reply->created_at->format('D, d M Y, H:i')}}</p>
                                                                                 <p class="comment">
                                                                                     <b>{{$reply->replay}}</b>
                                                                                 </p>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 @endif
                                                             @endforeach


                                                     </div>
                                                     @endif
                                                 @endforeach
                                             @endif
                                             </div>
                                         </div>
                                     </section>
                                     <br><br><br> <br><br><br>
                                     <!-- End comment-sec Area -->
                                @endif
                            @else
                                <a href="{{route('login')}}" class="btn btn-success" title="Sign In"><span>Sign In</span></a> Or
                                <a href="{{route('register')}}" class="btn btn-primary" title="Registration"><span>Registration</span></a>
                            @endif
                        </div>
                    </div>

                </div>


            </div>

            <!-- Related Products -->
            <div class="related-product ">
                <h3 class="modtitle">Services</h3>
                <hr>
                <hr>
                <hr>
                <div class="related-product-owl">
                    <div class=" owl-carousel related-owl " data-nav="yes" data-loop="yes" data-margin="30" data-items_xs="1" data-items_sm="3" data-items_md="3">

                        @foreach($services as $service)
                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="{{route('service.details', $service->id)}}" class="product-img"><img src="{{asset($service->image)}}" alt="" width="50%"></a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h1><a href="{{route('service.details', $service->id)}}">{{$service->title}}</a></h1>
                                            <div class="ratings">
                                                <div class="description item-desc text-justify">
                                                    <a href="{{route('service.details', $service->id)}}"><p>{{Str::limit($service->description, 150)}}</p></a>
                                                </div>
                                            </div>

                                            <div class="price">
                                                <span class="price-new">${{$service->unit_price}}</span>

                                            </div>

                                        </div>

                                        <div class="button-group">
                                            <a class="btn btn-default" href="{{route('service.details', $service->id)}}">Details</a>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- end Related  Products-->


        </div>


    </div>

@endsection

@section('script')
    <script type="text/javascript">
        function showReplyForm(commentId,user) {
            var x = document.getElementById(`reply-form-${commentId}`);
            var input = document.getElementById(`reply-form-${commentId}-text`);

            if (x.style.display === "none") {
                x.style.display = "block";
                input.innerText=`@${user},  `;

            } else {
                x.style.display = "none";
            }
        }

    </script>
@endsection
