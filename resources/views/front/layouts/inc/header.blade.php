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
        <link rel="icon" href="{{URL::asset('public/images/fav.png')}}">
        <link rel="stylesheet" href="{{URL::asset('public/css/all.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('public/css/hover-min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('public/css/media.css')}}">
        <link rel="stylesheet" href="{{URL::asset('public/css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
        <link rel="stylesheet" href="{{URL::asset('public/css/aos.css')}}">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        @if(app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{URL::asset('public/css/en.css')}}">
        @else
        <link rel="stylesheet" href="{{URL::asset('public/css/ar.css')}}">
        <link rel="stylesheet" href="{{URL::asset('public/css/bootstrap-rtl.css')}}">
        @endif

    </head>
    <body>
    <div class="loader"><img src="{{URL::asset('public/images/loader.gif')}}" alt="Loader"/></div>
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
