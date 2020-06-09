@extends('front.layouts.master')


@section('title',trans('front.special-occassions'))

@section('header')
@foreach ($home_cover as $cover )
<img   class="img-fluid" src="{{URL::asset('Uploads/header/') . '/' . $cover->home_image}}" alt="header">
@endforeach
<div class="container">
  <div class="header_content text-center px-3">
    <p>{{trans('front.special-occassions')}}</p>
  </div>
</div>
@stop

@section('content')
 <section class="products">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
            <div class="col-md-3 order-2 order-md-1 border-left product_list">
                @foreach ($occassions as $occassion )
                <p class="border-bottom pt-4">

                  <a href="{{url('occassion/product') . '/' .$occassion->id}}">

                     {{$occassion->name. '_'. app()->getLocale()}}
                     <span style="float: left;font-size: .7rem;">

                      <i class="fas fa-less-than"></i></span>

                    </a>

                </p>

                @endforeach
            </div>
            <div class="col-md order-1 order-md-2 products_gallery">
              <div class="row text-center pt-4">
                @foreach ($occassions as $product)
                <div class="col-md-4">

                     <div style="overflow: hidden;border: solid 1px #D69942;">

                     <a href="{{url('occassion/product'). '/' .$product->id}}">

                       <img class="img-fluid hvr-grow"

                       src="{{ URL::asset('Uploads/occassions/cover_image'. '/'. $product->image)}}" alt="{{$product->name_en}}"></a>

                     </div>

                     <h5 class="py-2">{{$product->name. '_'. app()->getLocale()}}</h5>

                 </div>
                 @endforeach
               </div>
              </div>
          </div>
        </div>
    </div>
</section>
@stop
