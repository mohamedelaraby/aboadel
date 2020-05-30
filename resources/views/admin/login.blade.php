<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title> Adel Admin</title>

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

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
               Adel Admin
            </a>
        </div>
    </div>
</nav>
<div class="wrapper">
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Sign In</strong></h3>
                    </div>

                    <div class="panel-body">

                    @include('admin.layouts.inc.message')
                    
                        {!! Form::open(['action' => 'Manage\AdminController@store', 'method'=>'post',]) !!}
                        {!! Form::token() !!}
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                       class="form-control border-input">
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" placeholder="Password"
                                       class="form-control border-input">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Sign In</button>
                            </div>

                            {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>
