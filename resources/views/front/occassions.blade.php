@extends('front.layouts.master')


@section('title',trans('admin.party-selection'))

@section('header')
<img class="img-fluid" src="images/tarttt.jpg" alt="header">
<div class="container">
  <div class="header_content text-center px-3">
    <p>Special ocasions</p>
  </div>
</div>
@stop

@section('content')
 <section class="products">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
            <div class="col-md-3 order-2 order-md-1 border-left product_list">
                <p class="border-bottom pt-4"><a href="أعياد الميلاد.html">Birthday & Personalised Cakes </a></p>
                <p class="border-bottom"><a href="تورت الأطفال.html">kids cakes</a></p>
                <p class="border-bottom"><a href="تورت الأرقام والحروف.html">Letters & Numbers Cakes </a></p>
                <p class="border-bottom"><a href="تورت الزفاف والخطوبة.html">Wedding & Engagement Cakes </a></p>
            </div>
            <div class="col-md order-1 order-md-2 products_gallery">
              <div class="row text-center pt-4">
                <div class="col-md-4">
                    <div style="overflow: hidden;border: solid 1px #D69942;">
                    <a href="images/fer.jpg" data-fancybox="gallery" data-caption="<h5>oreo cakes <br>200EGP</h5>">
                      <img class="img-fluid hvr-grow" src="images/fer.jpg" alt="products">
                    </a>
                    </div>
                    <h5 class="py-2"> E164 – 40×50</h5>
                    <p>200EGP</p>
                </div>
              </div>
          </div>
        </div>
    </div>
</section>
@stop
