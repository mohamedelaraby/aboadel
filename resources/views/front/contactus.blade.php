@extends('front.layouts.master')


@section('title',trans('front.contact'))

@section('header')
<img class="img-fluid" src="images/tarttt.jpg" alt="header">
<div class="container">
  <div class="header_content text-center px-3">
    <p>{{trans('front.contact')}}</p>
  </div>
</div>
@stop

@section('content')
   <!--call us-->
   <section class="products">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
            <div class="col-md-5">
                <h3 class="mb-3">{{trans('front.contact-info')}}</h3>
                <p>Tel: +02 01005767101 </p>
                <p>Tel: +02 01021264337 </p>
              </div>
            <div class="col-md products_gallery query">
              <form>
                <h3>{{trans('front.send-message')}}</h3>
              <input class="my-2 pr-2 py-2" style="width: 100%;" type="text" placeholder="{{trans('front.contact-name')}}">
                <input class="my-2 pr-2 py-2" style="width: 100%;" type="email" placeholder="{{trans('front.contact-email')}}">
                <input class="my-2 pr-2 py-2" style="width: 100%;" type="text" placeholder="{{trans('front.contact-subject')}}">
                <textarea class="my-2 pr-2 py-2" style="width: 100%;" cols="30" rows="6" placeholder="{{trans('front.contact-message')}}"></textarea>
                <input type="submit" class="subbtn rounded" value="{{trans('front.send')}}">
              </form>
            </div>
        </div>
    </div>
</section>
@stop
