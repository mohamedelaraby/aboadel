@extends('front.layouts.master')

@section('header')
@foreach ($home_cover as $cover )
<img   class="img-fluid" src="{{URL::asset('Uploads/header/home_page') . '/' . $cover->home_image}}" alt="header">
@endforeach

@stop

{{--  Main content --}}
@section('content')
<section class="gallery">
    <div class="container py-4">
        <div class="row">
            @foreach ($categories as $category )

            <div class="col-md-3" data-aos="fade-up">
              <div class="firstgal">
                <a href="{{url('category/products'). '/' .$category->id}}">
                  <img class="img-fluid mb-3 hvr-backward mt-3"
                  src="{{ asset('Uploads/categories/cover_image/'. $category->image)}}" alt="g">
                  <h5 class="pb-2">{{$category->name}}</h5>
                </a>
              </div>
            </div>

            @endforeach

        </div>
    </div>
  </section>
  <!--chef-->
  <section class="chef py-4">
    <div class="container py-5 text-center">
    <a href="{{route('front.chef')}}"><button class="hvr-wobble-bottom">{{trans('front.chef')}}</button></a>
    </div>
  </section>
  <!--store-->
  <section class="store">
    <div class="container py-5">
      <div class="row m-auto justify-content-center text-center">
        <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
          <div class="firstgal">
            <a href="{{route('front.contact')}}"><img class="img-fluid hvr-grow" src="{{URL::asset('images/بسبوسة قشطة.jpg')}}" alt="store"></a>
          </div>
          <h4 class="pt-2">{{trans('front.contact')}}</h4>
        </div>
        <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
          <div class="firstgal">
            <a href="{{route('front.share-form')}}"><img class="img-fluid hvr-grow" src="{{URL::asset('images/بيتفور شكولاتة مشكل.jpg')}}" alt="store"></a>
          </div>
          <h4 class="pt-2">{{trans('front.servey')}}</h4>
        </div>
        <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
          <div class="firstgal">
            <a href="{{route('front.stores')}}"><img class="img-fluid hvr-grow" src="{{URL::asset('images/تورتة موس فستق.jpg')}}" alt="store"></a>
          </div>
          <h4 class="pt-2">{{trans('front.store')}}</h4>
        </div>
      </div>
    </div>
  </section>
  <!--form-->
  <section class="form">
    <div class="container py-5">
      <div class="row justify-content-center m-auto">
        <div class="col-md mb-3">
          <iframe  height="270" src="https://www.youtube.com/embed/JqGDdU5_QmM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div style="overflow: hidden;" class="col-md">
          <form class="py-4" data-aos="fade-right">
            <h3 style="color: #CB913F;">News letter</h3>
            <input class="py-1" type="text" placeholder="your name">
            <input class="my-3 py-1" type="email" placeholder="email address"><br>
            <input class="sub py-1 mt-1 rounded" type="submit" value="sign in">
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
