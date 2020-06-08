@extends('front.layouts.master')


@section('title',trans('admin.party-selection'))

@section('header')
<img class="img-fluid" src="images/tarttt.jpg" alt="header">
<div class="container">
  <div class="header_content text-center px-3">
    <p>contact us</p>
  </div>
</div>
@stop

@section('content')
   <!--call us-->
   <section class="products">
    <div class="container py-4">
        <div class="row justify-content-center m-auto">
            <div class="col-md-5">
                <h3 class="mb-3">Contact  information</h3>
                <p>Tel: +02 01005767101 </p>
                <p>Tel: +02 01021264337 </p>
              </div>
            <div class="col-md products_gallery query">
              <form>
                <h3>send a message</h3>
                <input class="my-2 pr-2 py-2" style="width: 100%;" type="text" placeholder="your name">
                <input class="my-2 pr-2 py-2" style="width: 100%;" type="email" placeholder="e-mail">
                <input class="my-2 pr-2 py-2" style="width: 100%;" type="text" placeholder="subject">
                <textarea class="my-2 pr-2 py-2" style="width: 100%;" cols="30" rows="6" placeholder="message"></textarea>
                <input type="submit" class="subbtn rounded" value="send a message">
              </form>
            </div>
        </div>
    </div>
</section>
@stop
