@extends('front.layouts.master')


@section('title',trans('front.special-occassions'))

@section('header')
@foreach ($home_cover as $cover )
<img   class="img-fluid" src="{{URL::asset('Uploads/header/occassions_page') . '/' . $cover->occassions_image}}" alt="header">
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

                     {{$occassion->name}}
                     <span style="float: left;font-size: .7rem;">

                      <i class="fas fa-less-than"></i></span>

                    </a>

                </p>

                @endforeach
            </div>
            <div class="col-md order-1 order-md-2 products_gallery">
              <div class="row text-center pt-4">
                @foreach ($occassion_products as $product)
                <div class="col-md-4">

                     <div style="overflow: hidden;border: solid 1px #D69942;">

                        <a href="{{url('Uploads/occassions'. '/'. $product->occassion_id . '/' . $product->image)}}"

                            data-caption="
                            @if(app()->getLocale() == 'ar')
                             <h5>{{$product->name_ar}}</h5>
                             @else
                             <h5>{{$product->name_en}}</h5>
                            @endif
                             {{$product->price}} {{trans('front.pound')}}"
                            data-fancybox="gallery">

                            <img class="img-fluid hvr-grow"  src="{{UR::asset('Uploads/occassions'. '/'. $product->occassion_id . '/' . $product->image)}}" alt="occassions_products">

                     </div>
                     @if(app()->getLocale() == 'ar')
                     <h5 class="py-2">{{$product->name_ar}}</h5>
                     @else
                     <h5 class="py-2">{{$product->name_en}}</h5>
                     @endif
                     <p> {{$product->price}} {{trans('front.pound')}}</p>
                 </div>
                 @endforeach
               </div>
              </div>
          </div>
        </div>
    </div>
</section>
@stop
