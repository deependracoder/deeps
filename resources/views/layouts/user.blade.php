<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/user.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>
<body>
<aside class="side-nav" id="show-side-navigation1">
  <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
  <div class="heading">
    <img src="https://scontent.fktm8-1.fna.fbcdn.net/v/t1.0-9/48403076_988787087978148_6352289676262375424_o.jpg?_nc_cat=100&_nc_sid=09cbfe&_nc_ohc=EvKhepeUOKEAX-pB_fa&_nc_ht=scontent.fktm8-1.fna&oh=4fa844129af672786eeddd905b03bede&oe=5EB9BBBE" alt="">
    <div class="info">
      <h3><a href="#">Deependra</a></h3>
      <p>Online Now </p>
      <p>Owner of this business </p>
    </div>
  </div>
  <ul class="categories">
    <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="#"> Wallet</a>
      <ul class="side-nav-dropdown">
        <li><a href="/wallet">Deposit</a></li>
        <li><a href="/wallet">Withdraw</a></li>
        <li><a href="{{route('user.transactions')}}">Transactions</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-support fa-fw"></i><a href="#"> Mining</a>
      <ul class="side-nav-dropdown">
        <li><a href="{{route('user.view.plans')}}">Buy Package</a></li>
        <li><a href="{{route('user.runninng.plans')}}">Active Mining</a></li>
        <li><a href="#">All packages</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-envelope fa-fw"></i><a href="#"> Support</a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-users fa-fw"></i><a href="#"> Referral</a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-bolt fa-fw"></i><a href="#"> Testimonials</a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <p>More:</p>
    <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Messages <span class="num dang">56</span></a></li>
    <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-laptop fa-fw"></i><a href="#"> About US &amp; UX <span class="num succ">43</span></a></li>
    <li><i class="fa fa-comments-o fa-fw"></i><a href="#"> Something else</a></li>
  </ul>
</aside>
<section id="contents">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <i class="fa fa-align-right"></i>
        </button>
        <a class="navbar-brand" href="#">USer<span class="main-color">Dashboard</span></a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
              <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
              <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-comments"></i><span>1</span></a></li>
          <li><a href="#"><i class="fa fa-bell-o"></i><span>1</span></a></li>
          <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="py-4">
            @yield('content')
  </main>

</body>
</html>
