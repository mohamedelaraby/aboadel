<!doctype html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>SalSucre - @yield('page')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    {{Html::style( asset('assets/css/bootstrap.min.css'))}}

    {{Html::style(asset('assets/css/animate.min.css'))}}

    {{Html::style(asset('assets/css/paper-dashboard.css'))}}

    {{Html::style(asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css'))}}
    {{Html::style(asset('https://fonts.googleapis.com/css?family=Muli:400,300'))}}
    {{Html::style(asset('assets/css/themify-icons.css'))}}
    {{Html::style(asset('assets/css/style.css'))}}

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

{{Html::script('assets/js/jquery-1.10.2.js')}}
{{Html::script('assets/js/bootstrap.min.js')}}
{{Html::script('assets/js/script.js')}}

</html>
