@extends('front.layouts.master')


@section('title',trans('front.menu'))

@section('header')
@foreach($home_cover as $cover)
<img class="img-fluid" src="{{URL::asset('Uploads/header/category_page') . '/' . $cover->category_image}}" alt="header">
@endforeach
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

            @foreach ($categories as $category)
            <p class="border-bottom pt-4">
                <a href="{{url('category/products'). '/' .$category->id}}">
                    {{$category->name}}
                </a>
            </p>


            @endforeach

          </div>
            <div class="col-md order-1 order-md-2 products_gallery">
                <div class="row text-center pt-4">
                @foreach ($categories as $category)
                  <div class="col-md-4">
                      <div style="overflow: hidden;border: solid 1px #D69942;">
                      <a href="{{url('category/products/'). '/' .$category->id}}">
                        <img class="img-fluid hvr-grow"
                        src="{{URL::asset('Uploads/categories/cover_image') . '/' . $category->image}}" alt="products">
                    </a>
                      </div>
                      <h5 class="py-2">{{$category->name}}</h5>
                  </div>

                  @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
@stop
