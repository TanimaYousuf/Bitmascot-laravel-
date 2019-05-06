@extends('frontView.master')
@section('link')
<head>
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

<style>  
  body {
    font-family: "Lato", sans-serif;
  }
  .agileits_header {
      background: #333333;
      padding: 2px 0;
      position: fixed;
      width: 100%;
      top:0;
  }

  .sidenav {
    height: 100%;
    width: 340px;
    position: fixed;
    z-index: 1;
    top: 42px;
    left: 0;
    background-color:#ADD8E6;
    overflow-x: hidden;
    padding-top: 25px;
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

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  .footer {
     position: relative;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: black;
     color: white;
     text-align: center;
  }
  * {
    box-sizing: border-box;
  }

  form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    float: left;
    width: 80%;
    background: #f1f1f1;
  }

  form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
  }

  form.example button:hover {
    background: #0b7dda;
  }

  form.example::after {
    content: "";
    clear: both;
    display: table;
  }
</style>
</head>
@endsection
@section('title')
  <div class="agileits_header">
    <div class="container">
      <div class="w3l_offers">
      <!--  <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>-->
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
      @endif
    </ul>
  </div>
  <div class="clearfix"> </div>
</div>
</div>
@append
@section('image')
<div class="sidenav">
  <a href="{{url('/admin')}}">User Lists</a>
</div>

<div style="margin-left:25%;padding:1px 16px;height:1000px;"><br><br><br>
  <h2 style="text-align: center; color:#1E90FF">Admin Panel</h2><br>
  <h2 style="float:left; color:#1E90FF">User Info</h2><br><br>
  <form class="example" action="{{url('/admin')}}" method="get">
  <input type="text" placeholder="Search.." name="search" id="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<br><br><br>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Birthdate</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody class="active" id="success">
     @foreach($candidate as $singleCandidate)
     <tr>
      <td>{{$singleCandidate->first_name}}</td>
      <td>{{$singleCandidate->last_name}}</td>
      <td>{{$singleCandidate->address}}</td>
      <td>{{$singleCandidate->phone}}</td>
      <td>{{$singleCandidate->birthDate}}</td>
      <td>{{$singleCandidate->email}}</td>
     </tr>
     @endforeach
    </tbody>
  </table>
</script>
</div>
@endsection