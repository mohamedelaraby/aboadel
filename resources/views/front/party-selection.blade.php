@extends('front.layouts.master')


@section('title',trans('front.party-selection'))

@section('header')
@foreach ($home_cover as $cover )
    <img   class="img-fluid" src="{{URL::asset('Uploads/header/party_page') . '/' . $cover->party_image}}" alt="header">
@endforeach
    <div class="container">
    <div class="header_content text-center px-3">
        <p>{{trans('front.party-selection')}}</p>
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

            <div class="col-md order-1 order-md-2 products_gallery">
                <div class="row text-center pt-4">

                    @foreach ($parties as $party )
                    <div class="col-md-4">

                      <div style="overflow: hidden;border: solid 1px #D69942;">

                      <a href="{{ url('Uploads/parties'. '/'. $party->image)}}"
                        data-caption=" <h5>{{$party->name}}</h5>{{$party->price}} {{trans('front.pound')}} "
                        data-fancybox="gallery">
                          <img class="img-fluid hvr-grow" src="{{ URL::asset('Uploads/parties'. '/'. $party->image)}}" alt="products">

                        </a>

                      </div>

                      <h5 class="py-2"> {{$party->name}} </h5>

                      <p>{{$party->price}} {{trans('front.pound')}}</p>

                    </div>
                    @endforeach
              </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
