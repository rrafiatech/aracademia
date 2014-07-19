<html>
<head>

    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="UTF-8">
    <title>@yield('title','Aracademia')</title>
    <meta name="description" content="دروس تعليمية في العديد من المجالات. لا تتوقف عن التعلم"/>
    <meta name="author" content="Rachid Rafia">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Mobile Metas
      ================================================== -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- CCSS and fonts
      ================================================== -->

    {{HTML::style('plugins/bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('plugins/bootstrap/css/bootstrap-theme.min.css')}}
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    {{HTML::style('css/mainAracademia.css')}}

    <!-- Javascript files
      ================================================== -->
    {{HTML::script('js/aracademia.js')}}

    <script type="text/javascript">
        var RecaptchaOptions = {
            theme : 'blackglass'
        };
    </script>

</head>
<body>

<!-- Search starts
  ================================================== -->
<div id="sidr" style="display:none">

    {{Form::open(array('url'=>'/classes/search', 'role'=>'form'))}}
    <div class="text-center">
        إبحث في مكتبة الدروس
    </div>
    <div class="input-group">
        <span class="input-group-addon simple-menu" style="cursor: pointer"><i class="icomoon-close"></i></span>
        <input type="search" class="form-control" placeholder=" الدروس ">
    </div>
    {{Form::close()}}

</div>

<!-- Search ends
  ================================================== -->


<!-- Header starts
  ================================================== -->
<div id="wrap">
    <div class="top-bar">
        <div class="container">
            <div class="top-links col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <a href="/advertise">  أعلن معنا   </a> | <a href="/contactus"> إتصل بنا   </a>
            </div>

            <div class="top-co-inf col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <h6>  <i class="glyphicon glyphicon-search simple-menu"></i></h6>

            </div>
        </div>
    </div>
    <header id="header">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 Headerlogo">
                    <a href="/"> <img src="/img/logo.png" class="logo" alt="AraCademia"/></a>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 headerSocial hidden-xs">

                    <div class="socialfollow">
                        <a href="#" class="facebook"><i class="icomoon-facebook Three-Dee"></i></a>
                        <a href="#" class="twitter"><i class="icomoon-twitter Three-Dee"></i></a>
                        <a href="#" class="google"><i class="icomoon-google Three-Dee"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Header ends
  ================================================== -->

<!-- Navbar starts
  ================================================== -->
<nav class="navbar navbar-default" role="navigation">
    <section class="container noPadding">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse noPadding" id="navCollapse1">
                <ul class="nav navbar-nav text-left">

                    @if(Sentry::check())
                    <li>
                        <a href="#"><span class="icomoon-bell"></span> <span class="label label-warning">5</span></a>

                    </li>
                    <li>
                        <a href="#"><span class="icomoon-bubble"></span> <span class="label label-primary">5</span></a>
                    </li>
                    @else
                    <li>
                        <a href="/register">  <span class="glyphicon glyphicon-lock"></span> التسجيل   </a>
                    </li>
                    <li>
                        <a href="/login">  <span class="glyphicon glyphicon-log-in"></span>    الدخول  </a>
                    </li>
                    @endif

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Sentry::check())

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  {{Session::get('fullName')}} <b class="caret"></b></a>
                        <ul class="dropdown-menu text-right">
                            <li><a href="/"> الرئيسية  <span class="glyphicon glyphicon-home"></span></a></li>
                            <li><a href="#">صفحتي الشخصية  <span class="icomoon-profile"></span></a></li>
                            <li><a href="/dashboard"> لوحة التحكم  <span class="icomoon-cog-2"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="#">الإعدادات  <span class="icomoon-wrench-3"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="/logout">خروج   <span class="glyphicon glyphicon-log-out"></span></a></li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="/qa"> <span class="glyphicon glyphicon-question-sign"></span>    أسئله و أجوبه </a>
                    </li>
                    <li>
                        <a href="/categories"> <span class="glyphicon glyphicon-book"></span> الدروس  </a>
                    </li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </section>
</nav>

<!-- Navbar ends
  ================================================== -->