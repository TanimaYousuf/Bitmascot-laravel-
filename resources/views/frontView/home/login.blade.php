@extends('frontView.master')
@section('link')
<head>
<title>UIU Book Shop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="frontEnd/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="frontEnd/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="frontEnd/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="frontEnd/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="frontEnd/js/move-top.js"></script>
<script type="text/javascript" src="frontEnd/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
</head>
@endsection
@section('title')
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
            <!--    <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>-->
            </div>
            <div class="agile-login">
                <ul>
                    @if(session()->get('first_name'))
                    <?php
                    $name=session()->get('first_name');
                    $data=json_decode($name,true);
                    $username=$data[0]['first_name'];
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>
                            <strong>{{$username}}</strong>
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                        <ul style="background-color:white;" class="dropdown-menu">
                    <li>
                        <div class="navbar-login">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-center">
                                        <span class="glyphicon glyphicon-user icon-size"></span>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="text-left"><strong>{{$username}}</strong></p>
                                    <p class="text-left">
                                        <a href="{{url('/changePassword')}}" class="btn btn-primary btn-block btn-sm">Change Password</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="navbar-login navbar-login-session">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        <a href="{{url('/logout')}}" class="btn btn-danger btn-block">Logout</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            @else
            <li><a href="{{url('/register')}}"> Create Account </a></li>
            <li><a href="{{url('/loginForm')}}">Login</a></li>
            @endif
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left">
                            <h1><a href="{{url('/')}}">UIU Book Shop</a></h1>
            </div>
            
            <div class="clearfix"> </div>
        </div>
    </div>
<div class="navigation-agileits">
        <div class="container">
            <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div> 
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                <li class="active"><a href="{{url('/')}}" class="act">Home</a></li> 
                                <li><a href="{{url('/profile')}}">Profile</a></li>
                                </ul>
                            </div>
                            </nav>
            </div>
        </div>
@endsection
@section('image')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Login Page</li>
            </ol>
        </div>
    </div>
<div class="login">
        <div class="container">
            <h2>Login Form</h2>
        
            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form id="form-submit" method="post" action="{{url('/loginForm')}}">
                <input id="signin-token" name="_token" type="hidden" value="{{csrf_token()}}">
                <input type="email" id="email" name="email" placeholder="Email Address" required class="form-control " >
                <input type="password" id="password" name="password" placeholder="Password" required class="form-control" >
                 <button class="btn btn-primary" type="submit" id="butsave" name="login">Login</button>
                  <script type="text/javascript">
                    $("#form-submit").submit(function(event) {
                        event.preventDefault();
                        var $form = $( this ),
                        url = $form.attr( 'action' );
                        var posting = $.post( url, {email: $('#email').val(), password: $('#password').val(), _token: $("#signin-token").val() } );
                        posting.done(function( data ) {
                            if(data=='invalid'){
                                alert("Invalid Email or Password!!! Please try again!!!");
                            }
                            else if(data=='admin@localhost.local'){
                                     window.location.href="{{url('/admin')}}";
                                     alert('You are logged in');
                                }
                                else{
                                 window.location.href="{{url('/')}}";
                                 alert('You are logged in');
                             }
                            
                        });
                    });
                </script>
                <input class="btn btn-primary" type="button" onclick="myFunction()" name="clear" value="Clear" class="button">
                </form>
            </div>
            <h4>For New People</h4>
            <p><a href="{{url('/register')}}">Register Here</a> (Or) go back to <a href="{{url('/')}}">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
        </div>
    </div>
    <script>
function myFunction() {
  document.getElementById("form-submit").reset();
}
</script>
    
        @endsection