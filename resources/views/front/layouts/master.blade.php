@include('front.layouts.inc.header')
<!--nav start-->
@include('front.layouts.inc.nav')

      <!--header start-->

    <header class="for-image">
       @yield('header')
      </header>
      <!--gallery start-->

      @yield('content')

      <!--footer-->
   @include('front.layouts.inc.footer')
    <body>
        <!--scripts-->
        <script src="{{URL::asset('js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{URL::asset('js/popper.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}"></script>
        <script src="{{URL::asset('js/jquery.fancybox.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
        <script src="{{URL::asset('js/aos.js')}}"></script>
        <script>AOS.init();</script>
        <!--scripts-->
    </body>
</html>
