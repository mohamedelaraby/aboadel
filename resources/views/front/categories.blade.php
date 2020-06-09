@extends('front.layouts.master')


@section('title',trans('admin.party-selection'))

@section('header')
<img class="img-fluid" src="images/header10.jpg" alt="header">
<div class="container">
  <div class="header_content text-center px-3">
    <p>{{trans('front.menu')}}</p>
  </div>
</div>
@stop

@section('content')
<!--products-->
<section class="products">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
          <div class="col-md-3 order-2 order-md-1 border-left product_list">
            <p class="border-bottom pt-4"><a href="التورت.html">cakes </a></p>
            <p class="border-bottom"><a href="تورت الأيس كريم.html">ice cream cakes </a></p>
            <p class="border-bottom"><a href="الجاتوه.html">gateaux </a></p>
            <p class="border-bottom"><a href="الشرقي.html">oriental sweets</a></p>
            <p class="border-bottom"><a href="مخبوزات طازجة.html">bakery </a></p>
            <p class="border-bottom"><a href="الشوكولاته.html">Chocolate products </a></p>
            <p class="border-bottom"><a href="بتي فور وسابليه.html">petit fours & sables </a></p>
            <p class="border-bottom"><a href="الغربي.html">western</a></p>
          </div>
            <div class="col-md order-1 order-md-2 products_gallery">
                <div class="row text-center pt-4">
                  <div class="col-md-4">
                      <div style="overflow: hidden;border: solid 1px #D69942;">
                      <a href="الجاتوه.html"><img class="img-fluid hvr-grow"
                        src="images/fer.jpg" alt="products">
                    </a>
                      </div>
                      <h5 class="py-2">gateaux</h5>
                  </div>

                </div>

          @foreach ($categories as $category)

          <p>

          <a href="{{url('category/products/'). '/' .$category->id}}">

            {{$category->name_ar}}

          </a>

          </p>

          @endforeach
            </div>
        </div>
    </div>
</section>
@stop
