@extends('front.layouts.master')

@section('header')

    @foreach ($header_cover as $cover )
    <img   class="img-fluid" src="{{url('Uploads/header/home_page') . '/' . $cover->home_image}}" alt="header">
    @endforeach

@endsection

{{--  Main content --}}
@section('content')
<section class="gallery">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-3" data-aos="fade-up">
          <div class="firstgal">
          <a href="التورت.html"><img class="img-fluid mb-3 hvr-backward mt-3" src="{{url('images/تورتة رويال موس شيكولاتة مع موس وايت.jpg')}}" alt="g"><h5 class="pb-2">cakes</h5></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--chef-->
  <section class="chef py-4">
    <div class="container py-5 text-center">
      <a href="اختيار الشيف الشهري.html"><button class="hvr-wobble-bottom">Chef’s pick <br>of th month</button></a>
    </div>
  </section>
  <!--store-->
  <section class="store">
    <div class="container py-5">
      <div class="row m-auto justify-content-center text-center">
        <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
          <div class="firstgal">
            <a href="اتصل بنا.html"><img class="img-fluid hvr-grow" src="images/بسبوسة قشطة.jpg" alt="store"></a>
          </div>
          <h4 class="pt-2">Contact Us Now</h4>
        </div>
        <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
          <div class="firstgal">
            <a href="شارك في الاستبيان.html"><img class="img-fluid hvr-grow" src="images/بيتفور شكولاتة مشكل.jpg" alt="store"></a>
          </div>
          <h4 class="pt-2">Take Our Survey Now</h4>
        </div>
        <div class="col-md" data-aos="flip-up" data-aos-duration="1400">
          <div class="firstgal">
            <a href="فروعنا.html"><img class="img-fluid hvr-grow" src="images/تورتة موس فستق.jpg" alt="store"></a>
          </div>
          <h4 class="pt-2">our stores</h4>
        </div>
      </div>
    </div>
  </section>
  <!--form-->
  <section class="form">
    <div class="container py-5">
      <div class="row justify-content-center m-auto">
        <div class="col-md mb-3">
          <iframe  height="270" src="https://www.youtube.com/embed/JqGDdU5_QmM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div style="overflow: hidden;" class="col-md">
          <form class="py-4" data-aos="fade-right">
            <h3 style="color: #CB913F;">News letter</h3>
            <input class="py-1" type="text" placeholder="your name">
            <input class="my-3 py-1" type="email" placeholder="email address"><br>
            <input class="sub py-1 mt-1 rounded" type="submit" value="sign in">
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
