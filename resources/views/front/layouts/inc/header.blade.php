<!DOCTYPE html>
@if(app()->getLocale() == 'en')

<html dir="ltr" lang="en">
@else
<html dir="rtl" lang="ar">
@endif
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="describtion" content="Abu Adel">
        <meta name="keywords" content="Abu Adel">
        <meta name="author" content="Abu Adel">
        <title>  @yield('title') - Abu Adel</title>
        <link rel="icon" href="images/fav.png">
        <link rel="stylesheet" href="{{URL::asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/hover-min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/media.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/aos.css')}}">
        @if(app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{URL::asset('css/en.css')}}">
        @else
        <link rel="stylesheet" href="{{URL::asset('css/ar.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap-rtl.css')}}">
        @endif
    </head>
    <body>
    <div class="loader"><img src="{{URL::asset('images/loader.gif')}}" alt="Loader"/></div>
     <!--upper nav-->
     <section class="uppernav">
       <div class="container pt-1">
         <div class="row">
           <p class="pr-1">{{trans('front.select-lang')}}:   </p>
           <a href="{{url('lang/en')}}">{{trans('front.english')}}</a>
           <p class="px-2">|</p>
           <a href="{{url('lang/ar')}}">{{trans('front.arabic')}}</a>
         </div>
       </div>
     </section>
