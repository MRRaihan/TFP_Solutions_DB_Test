@extends('layouts.frontend.master')

@section('title', 'Home')
@section('content')
    <ul class="header-main type-1">
        <li class="home"><a href="{{route('home')}}">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
    </ul>

    <div class="row">
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{session('message')}}
            </div>
        @endif
    </div>

    <div class="row">
        <!--Middle Part Start-->
        <div id="content " class="col-md-12 col-sm-12 type-1">


            <!-- Related Products -->
            <div class="related-product ">
                <h3 class="modtitle">Our Services</h3>
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
                                            <a href="{{route('service.details',  $service->id)}}" class="product-img"><img src="{{asset($service->image)}}" alt="" width="50%"></a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h1><a href="{{route('service.details',  $service->id)}}">{{$service->title}}</a></h1>
                                            <div class="ratings">
                                                <div class="description item-desc text-justify">
                                                    <a href="{{route('service.details',  $service->id)}}"><p>{{Str::limit($service->description, 150)}}</p></a>
                                                </div>
                                            </div>

                                            <div class="price">
                                                <span class="price-new">${{$service->unit_price}}</span>

                                            </div>

                                        </div>

                                        <div class="button-group">
                                            <a class="btn btn-default" href="{{route('service.details',  $service->id)}}">Details</a>
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
    <!--Middle Part End-->
@endsection
