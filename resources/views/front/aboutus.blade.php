@extends('front.layouts.master')


@section('title',trans('front.story'))

@section('header')
@foreach ($home_cover as $cover )
    <img   class="img-fluid" src="{{URL::asset('Uploads/header/aboutus_page') . '/' . $cover->aboutus_image}}" alt="header">
@endforeach
<div class="container">
  <div class="header_content text-center px-3">
    <p> {{trans('front.story')}}</p>
  </div>
</div>
@stop

@section('content')
<section class="products">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
            <div class="col-md-3 order-2 order-md-1 border-left product_list">
                <p class="border-bottom pt-4"><a href="{{route('home')}}"></a></p>
                <p class="border-bottom"><a href="{{route('front.about_us')}}"> {{trans('front.about')}} </a></p>
                <p class="border-bottom"><a href="{{route('front.category')}}"> {{trans('front.menu')}} </a></p>
                <p class="border-bottom"><a href="{{route('front.party')}}">{{trans('front.party-selection')}} </a></p>
                <p class="border-bottom"><a href="{{route('front.occassion')}}">{{trans('front.special-occassions')}} </a></p>
                <p class="border-bottom"><a href="{{route('front.stores')}}">{{trans('front.store')}} </a></p>
                <p class="border-bottom"><a href="{{route('front.chef')}} ">{{trans('front.chef')}} </a></p>
                <p class="border-bottom"><a href=" {{route('front.share-form')}} "> {{trans('front.survey')}} </a></p>
                <p class="border-bottom"><a href=" {{route('front.contact')}} ">{{trans('front.contact')}} </a></p>
            </div>
            <div class="col-md order-1 order-md-2 about_us mt-4">
              <h5 style="color: #CB913F;" class="p-3">{{trans('front.history')}}</h5>
              <div class="container">
                <p style="font-size: .9rem;"
                 class="border p-3 text-muted">
                 {{trans('front.history-details')}}
                </p>
              </div>
              <h5 style="color: #CB913F;" class="p-3"> {{trans('front.vision')}}</h5>
              <div class="container">
                <p style="font-size: .9rem;" class="border p-3 text-muted">
                    {{trans('front.vision-details')}}                </p>
              </div>
          </div>

        </div>
    </div>
</section>
@stop
