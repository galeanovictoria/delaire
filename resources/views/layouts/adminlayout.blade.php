<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I'm a freelance web designer, developer and photographer based currently in Auckland, New Zealand. I build modern and affordable websites, helping small business owners and entrepeneurs showcase their products and services online.">
    <meta name="author" content="Photographer, Designer, Developer">
    
<!--    Stylesheets-->
    <link rel="stylesheet" href="/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/animate.css-master/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    
<!--    Scripts-->
    <script src="js/jquery-2.2.2.min.js"></script>
    <script src="https://use.fontawesome.com/a1eb6f38e5.js"></script>
    <script src="js/Lettering.js-master/jquery.lettering.js"></script>
    <script src="js/textillate-master/jquery.textillate.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/SlickNav/jquery.slicknav.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    
    <title>Del Aire Design & Development</title>
</head>

<body id="bs">
    <div class="container-fluid">
        <div class="row" id="fixed-menu">
                <div class="col-sm-12" id="nav-wrapper">
                    <nav id="menu" class="menuClass">
                        <ul id="for-slicknav" >
                            <a data-scroll href="{{ url('/index') }}"><li class="hvr-underline-reveal">HOME</li></a>
                            <a data-scroll href="{{ url('/index') }}"><li class="hvr-underline-reveal">ABOUT ME</li></a>
                            <a data-scroll href="{{ url('/index') }}"><li class="hvr-underline-reveal">PORTFOLIO</li></a>
                            <a data-scroll href="{{ url('/index') }}"><li class="hvr-underline-reveal">CONTACT</li></a>
                            @if (Auth::guest())
                            <a href="{{ url('/home') }}"><li class="hvr-underline-reveal">MEMBERS</li></a>
                            @else
                            <a href="{{ url('/admin') }}"><li class="hvr-underline-reveal">ADMIN</li></a>
                            <a href="{{ url('/logout') }}"><li class="hvr-underline-reveal">LOG OUT</li></a>
                            @endif
                        </ul> 
                        <ul id="social-icons">
                        <a href="https://www.facebook.com/delairedesign/?ref=aymt_homepage_panel" target="_blank"><li><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
                        <a href="https://www.instagram.com/vishi_roberts/" target="_blank"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                        <a href="mailto:mvictoriaroberts@gmail.com" target="_top"><li><i class="fa fa-envelope-o" aria-hidden="true"></i></li></a>
                        <a data-scroll href="#one"><li><i class="fa fa-home" aria-hidden="true"></i></li></a>
                        </ul>                       
                    </nav>
                </div>
            </div>
    </div>
    
@yield('content')

<div class="">
        <footer class="container-fluid">
            <div class="row" id="footer-color">
               <div class="col-sm-3 col-md-2 col-md-offset-1 footer-second">
                   <img src="/assets/logo.png" alt="logo" width="200" id="logo-footer">
                   <p class="text-justify padd">We are all about product and corporate photography, web design and web development.</p>
                </div>
                <div class="col-sm-3 col-md-2 col-md-offset-1 footer-second footer-item">
<!--                    <h4 class="">Quick links</h4>-->
                    <ul id="quick-links" class="text-left">
                        <a data-scroll href="{{ url('/index') }}"><li class="hvr-underline-reveal">HOME</li></a>
                            <a data-scroll href="{{ url('/index') }}"><li class="hvr-underline-reveal">ABOUT ME</li></a>
                            <a data-scroll href="{{ url('/index') }}"><li class="hvr-underline-reveal">PORTFOLIO</li></a>
                            <a data-scroll href="{{ url('/index') }}"><li class="hvr-underline-reveal">CONTACT</li></a>
                            @if (Auth::guest())
                            <a href="{{ url('/home') }}"><li class="hvr-underline-reveal">MEMBERS</li></a>
                            @else
                            <a href="{{ url('/admin') }}"><li class="hvr-underline-reveal">ADMIN</li></a>
                            <a href="{{ url('/logout') }}"><li class="hvr-underline-reveal">LOG OUT</li></a>
                            @endif
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 footer-item">
                    <h4 class="">Sign up to our newsletter</h4>
                    {!! Form::open(['url' => 'newsletter']) !!}
                   {!! Form::text('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'Name'])  !!}
                   {!! Form::email('email', null, ['class'=>'form-control', 'required', 'placeholder'=>'E-mail']) !!}
                   {!! Form::submit('Send', ['class'=>'btn btn-lg btn-block hvr-fade', 'id'=>'submit']); !!}
                {!! Form::close() !!}
                </div>
                <div class="col-xs-6 col-sm-2 footer-item">
<!--                    <h4 class="text-right">Contact info</h4>-->
                    <p class="text-right"><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> mvictoriaroberts@gmail.com</p>
                    <p class="text-right"><span><i class="fa fa-phone" aria-hidden="true"></i></span> 021 85 92 92</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-lg-2 col-lg-offset-1" style="border-top: 1px solid white;">
                       <ul id="social-media">
                         <a href="https://www.facebook.com/delairedesign/?ref=aymt_homepage_panel" target="_blank"><li><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
                        <a href="https://www.instagram.com/vishi_roberts/" target="_blank"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                        <a href="mailto:mvictoriaroberts@gmail.com" target="_top"><li><i class="fa fa-envelope-o" aria-hidden="true"></i></li></a>
                        <a data-scroll href="index"><li><i class="fa fa-home" aria-hidden="true"></i></li></a>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
               <p>Del Aire Design and Development 2017</p>
                </div>
            </div>
        </footer>
    </div>
</body>

<script>
     $('#for-slicknav').slicknav({
                label: '',
            });
</script>

</html>