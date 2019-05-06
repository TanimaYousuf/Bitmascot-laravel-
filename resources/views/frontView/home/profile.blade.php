@extends('frontView.master')
@section('link')
<head>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  background:#ADD8E6;
  padding-top: 25px;
  height: 500px;
}

.sidenav a {
  padding: 6px 8px 6px 60px;
  text-decoration: none;
  font-size: 25px;
  color: #1E90FF;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.login-form-grids {
  padding: 0 15px 0 15px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
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
 <div class="row">
    <div class="col-md-4 sidenav">
      <a href="{{url('/profile')}}">Profile Page</a>
      <a href="{{url('/changePassword')}}">Change Password</a>
    </div>
    <div class="col-md-8">
      <h2 style="padding-left:285px ;color:#1E90FF; padding-top: 40px;">Profile Info</h2>
      <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
         @foreach($candidates as $singleCandidate)
                                <h4>First Name: {{$singleCandidate->first_name}}</h4>
                                <br>
                                <h4>Last Name: {{$singleCandidate->last_name}}</h4>
                                <br>
                                <h4>Address: {{$singleCandidate->address}}</h4>
                                <br>
                                <h4>Phone: {{$singleCandidate->phone}}</h4>
                                <br>
                                <h4>BirthDate: {{$singleCandidate->birthDate}}</h4>
                                <br>
                                <h4>Email: {{$singleCandidate->email}}</h4>
                                @endforeach
      </div>
    </div>
  </div>
@endsection
