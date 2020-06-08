@extends('front.layouts.master')


@section('title',trans('admin.party-selection'))

@section('header')
<img class="img-fluid" src="images/tarttt.jpg" alt="header">
<div class="container">
  <div class="header_content text-center px-3">
    <p>stores Locations</p>
  </div>
</div>
@stop

@section('content')
<section class="products">
    <div class="container py-4">
        <div class="row m-auto">
            <div style="background: transparent;font-size: .9rem;" class="col-md border-left product_list border-0">
                <h4 class="py-3" style="color: #CB913F;">stores locations</h5>
                <h6 style="font-size: .8rem;" class="font-weight-bold">الفرع الرئيسي القباب الصغري كوبري ابو عادل </h6>
                <p> هاتف: 01005767101 / 01021264337</p>
                <h6 style="font-size: .8rem;" class="font-weight-bold">الفرع الثاني  - دموه بجوار استوديو زووم</h6>
                <p> هاتف: 01019000984</p>
                <h6 style="font-size: .8rem;" class="font-weight-bold">الفرع التالت منيه النصر شارع المحكمه</h6>
                <p> هاتف: 01015998991</p>
                <h6 style="font-size: .8rem;" class="font-weight-bold">الفرع الرابع ديمشلت امام موقف المنصوره</h6>
                <p> هاتف: 01027184023</p>
            </div>
        </div>
    </div>
</section>

@stop
