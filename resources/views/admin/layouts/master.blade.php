<!doctype html>
<html dir="rtl" lang="{{app()->getLocale() == 'ar'}}">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" sizes="96x96" href="{{URL::asset('public/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Abu adel - @yield('page')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>




    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300">


    <link rel="stylesheet" href="{{URL::asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/assets/css/paper-dashboard.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('public/assets/css/style.css')}}">

</head>
<body>



<div class="wrapper">
    {{-- [ Include sidebar ] --}}
    @include('admin.layouts.inc.sidebar')

    <div class="main-panel">

        @include('admin.layouts.inc.navbar')
        {{-- [ Include navbar ] --}}


        <div class="content">
            <div class="container-fluid">

                {{-- yield content --}}
                @yield('content')

            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href="">Mr.Araby</a>
                </div>
            </div>
        </footer>

    </div>
</div>

</body>
<script src="{{URL::asset('public/assets/js/jquery-1.10.2.js')}}"></script>
<script src="{{URL::asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('public/assets/js/script.js')}}"></script>



</html>
