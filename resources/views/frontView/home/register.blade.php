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
<br>

<div class="register">
        <div class="container">
            <h2>Register Here</h2>
            <div class="login-form-grids">
                <h6>Login information</h6>
                <form id="form-submit" method="post" action="{{url('/register')}}">
                <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                <label>First Name:</label>
                <input type="text" name="first_name" id="first_name" required class="form-group"><br>
                <label>Last Name:</label>
                <input type="text" name="last_name" id="last_name" required class="form-group"><br>
                <label>Address:</label>
                <input type="text" name="address" id="address" required class="form-group"><br>
                <label>Phone:</label>
                <input type="text" name="phone" id="phone" required class="form-group"><br>
                <label>BirthDate:</label>
                <input type="date" name="birthDate" id="birthDate" required class="form-group"><br>

                <label>Email:</label>
                <input type="email" name="email" id="email" required class="form-group"><br>
                <label>Password:</label>
                <input type="password" name="password" id="password" required class="form-group"><br>
                <label>Confirm Password:</label>
                <input type="password" name="cpassword" id="cpassword" required class="form-group"><br>
                <button class="btn btn-primary" type="submit" id="butsave" name="register">Register</button>
                <script type="text/javascript">
                    $("#form-submit").submit(function(event) {
                        event.preventDefault();
                         var $form = $( this ),
                          url = $form.attr( 'action' );
                          var posting = $.post( url, { first_name: $('#first_name').val(), last_name: $('#last_name').val(), address: $('#address').val(), phone: $('#phone').val(), birthDate: $('#birthDate').val(), email: $('#email').val(), password: $('#password').val(), cpassword: $('#cpassword').val(),  _token: $("#signup-token").val() } );
                          posting.done(function( data ) {
                            if(data=='unique'){
                                window.location.href="{{url('/loginForm')}}";
                                alert("Registered Successfully");
                            }
                            if(data=='not_unique'){
                                alert("Alert!!! Existing Email!!! Already Registered!!!");
                            }
                            if(data=='not_match'){
                                alert("Cofirm password do not match!!! Please try again!!!");
                            }
                        });
                      });
                </script>
                 <input class="btn btn-primary" type="button" onclick="myFunction()" name="clear" value="Cancel" class="button">
                 <script>
                    function myFunction() {
                        document.getElementById("form-submit").reset();
                    }
</script>
                </form>
            </div>
            <div class="register-home">
                            <a href="{{url('/')}}">Home</a>
            </div>
        </div>
    </div>
        @endsection
      