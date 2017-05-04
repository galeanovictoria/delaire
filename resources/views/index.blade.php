@extends('layouts.layout')

@section('content')
<body id="bs">
    <div class="" id="one">
       <div class="parallax-window" data-parallax="scroll" data-image-src="../assets/deskhero.jpg">
        <header class="hero-section container-fluid">
            <div class="row" id="fixed-menu">
                <div class="col-sm-12 col-lg-12" id="nav-wrapper">
                    <nav id="menu">
                        <ul id="for-slicknav" >
                            <a data-scroll href="#one"><li class="hvr-underline-reveal">HOME</li></a>
                            <a data-scroll href="#two"><li class="hvr-underline-reveal">ABOUT ME</li></a>
                            <a data-scroll href="#three"><li class="hvr-underline-reveal">PORTFOLIO</li></a>
                            <a data-scroll href="#four"><li class="hvr-underline-reveal">CONTACT</li></a>
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-statement text-center">
                       <img src="assets/logo.png" alt="logo" class="hidden img-responsive" id="logo" width="600">
                        <h1 class="tlt">
                            <ul class="texts">
                                <li data-in-effect="fadeIn" data-out-effect="fadeOut">Crafting modern websites.</li>
                            </ul>
                        </h1>
                        <h1 class="tlt">
                            <ul class="texts">
                                <li data-in-effect="fadeIn" data-out-effect="fadeOut">Designing your success.</li>
                            </ul>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
    </div>
    </div>
    <div class="container-fluid bottom-padd">
        <div class="row" id="two">
           
        </div>
        <div class="row title-padd">
           
            <div class="col-sm-10 col-sm-offset-1 col-md-6 col-lg-7" style="border-bottom:1px solid black;">
               <h2 class="" style="border-bottom:1px solid black; padding-bottom:5px">Hello, I'm Victoria</h2>
                <p>I'm a freelance web designer, developer and photographer based currently in Auckland, New Zealand. I build modern and affordable websites, helping small business owners and entrepeneurs showcase their products and services online.</p>
                <p>I also have over a decade of experience in customer service, technical support and management; Providing great customer service experiences is my passion.</p>
                <p>From the initial stages of design, to taking stunning eye-catching photos to embellish your website's content and develop the final app, I can deliver a complete user experience.</p>
                <p>If you are interested in working with me, check out my contact details <a data-scroll href="#four"><span class="">here.</span></a></p>
            </div>
            <div class="col-md-5 col-lg-4">
                <img src="assets/portrait.png" alt="profile" width="400" class="img-responsive" style="margin-top:50px;" id="portraitphoto">
            </div>
        </div>
    </div>
    <div class="container-fluid" id="three">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <h2 class="padd" class="center-titles">My portfolio</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
               <ul id="portfolio_list">
                @foreach ($projects as $project)
                   <li class="portfolio_item">
                    <img src="assets/{{$project->proj_img}}" alt="portfolio-img" class="portfolio-img" width="400" class="portfolio_tn">
                    <div class="project_info">
                       <div class="project_info_list">
                            <h3 style="border-bottom:1px solid white">{{$project->proj_title}}</h3>
                            <p>Type: {{$project->proj_type}}</p>
                            <p>Role: {{$project->proj_role}}</p>
                            <p>Tools: {{$project->proj_tools}}</p>
                            <p>Year: {{$project->proj_year}}</p>
                        </div>
                    </div>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="our-services">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h2 class="padd">Our Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <ul id="services-ul">
                    <li class="services-item pulse">
                       <h1><i class="fa fa-paint-brush" aria-hidden="true"></i></h1>
                        <h3>Design</h3>
                        <p>We design beautiful and affordable websites from scratch, providing an incredible user experience and showcasing your products and services.</p>
                    </li>
                    <li class="services-item">
                        <h1><i class="fa fa-code" aria-hidden="true"></i></h1>
                        <h3>Development</h3>
                        <p>Developing with either Laravel or Wordpress frameworks, we build an intuitive experience for our clients business needs.</p>
                    </li>
                    <li class="services-item">
                        <h1><i class="fa fa-camera" aria-hidden="true"></i></h1>
                        <h3>Photography</h3>
                        <p>Content and Product photography are a key part of your website; we can create stunning imagery that will catch the attention of your customers.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid" id="four">
       <div class="row">
           <div class="col-sm-10 col-sm-offset-1">
               <h2 class="padd">Get in touch</h2>
           </div>
       </div>
       <div class="row">
           <div class="col-sm-8 col-sm-offset-2 form-group">
               {!! Form::open(['url' => 'contact']) !!}
                  {{ csrf_field() }}
                   {!! Form::label('name', 'Name:') !!}
                   {!! Form::text('name', null, ['class'=>'form-control' , 'required'])  !!}
                    {!! Form::label('email', 'Email:') !!}
                   {!! Form::email('email', null, ['class'=>'form-control', 'required']) !!}
                   {!! Form::label('message', 'Message:') !!}
                   {!! Form::textarea('message', null, ['class'=>'form-control', 'required']) !!}
                   
                   {!! Form::submit('Send', ['class'=>'btn btn-lg btn-block hvr-fade', 'id'=>'submit']); !!}
                {!! Form::close() !!}
           </div> 
       </div>
    </div>
    
    <div class="container-fluid" id="feedback-wrapper">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <span><i class="fa fa-quote-left" aria-hidden="true" style="font-size:8rem;"></i></span>
                <h4 id="feedback-comment">Del Aire Design & Development helped us program and launch the website for our new start up company. They were fantastic to deal with from start to finish, made the whole process very easy and the website looks excellent on a desktop, tablet or mobile. They are extremely professional and knowledgeable and were there for us every step of the way. They were super prompt and adequate in returning our emails for any problem or changes during the working process and put their heart and soul into the project. We wouldn't hesitate for a second to recommend Del Aire Design & Development to anyone looking for professional web design/development and support.</h4>
                <h3 class="text-right">Bow and Tie - Micro Roastery</h3>
            </div>
        </div>
    </div>
       
        <footer class="container-fluid">
            <div class="row">
               <div class="col-sm-3 col-md-2 col-md-offset-1 footer-second">
                   <img src="/assets/logo.png" alt="logo" width="200" id="logo-footer">
                   <p class="text-justify padd">We are all about product and corporate photography, web design and web development.</p>
                </div>
                <div class="col-sm-3 col-md-2 col-md-offset-1 footer-second footer-item">
<!--                    <h4 class="">Quick links</h4>-->
                    <ul id="quick-links" class="text-left">
                        <a data-scroll href="#one"><li class="hvr-underline-reveal">HOME</li></a>
                            <a data-scroll href="#two"><li class="hvr-underline-reveal">ABOUT ME</li></a>
                            <a data-scroll href="#three"><li class="hvr-underline-reveal">PORTFOLIO</li></a>
                            <a data-scroll href="#four"><li class="hvr-underline-reveal">CONTACT</li></a>
                            @if (Auth::guest())
                            <a href="{{ url('/home') }}"><li class="hvr-underline-reveal">MEMBERS</li></a>
                            @else
                            <a href="{{ url('/admin') }}"><li class="hvr-underline-reveal">ADMIN</li></a>
                            <a href="{{ url('/logout') }}"><li class="hvr-underline-reveal">LOG OUT</li></a>
                            @endif
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 footer-item">
                    <h4 class="">Sign up to our newsletter</h4>
                    {!! Form::open(['url' => 'newsletter']) !!}
                    {{ csrf_field() }}
                   {!! Form::text('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'Name'])  !!}
                   {!! Form::email('email', null, ['class'=>'form-control', 'required', 'placeholder'=>'E-mail']) !!}
                   {!! Form::submit('Send', ['class'=>'btn btn-lg btn-block hvr-fade', 'id'=>'newsletter']); !!}
                {!! Form::close() !!}
                </div>
                <div class="col-xs-12 col-sm-3 footer-item">
<!--                    <h4 class="text-right">Contact info</h4>-->
                    <a href="mailto:mvictoriaroberts@gmail.com" target="_top"><p class="text-right"><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> mvictoriaroberts@gmail.com</p></a>
                    <p class="text-right"><span><i class="fa fa-phone" aria-hidden="true"></i></span> 021 85 92 92</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-lg-2 col-lg-offset-1" style="border-top: 1px solid white;">
                       <ul id="social-media">
                         <a href="https://www.facebook.com/delairedesign/?ref=aymt_homepage_panel" target="_blank"><li><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
                        <a href="https://www.instagram.com/vishi_roberts/" target="_blank"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                        <a href="mailto:mvictoriaroberts@gmail.com" target="_top"><li><i class="fa fa-envelope-o" aria-hidden="true"></i></li></a>
                        <a data-scroll href="#one"><li><i class="fa fa-home" aria-hidden="true"></i></li></a>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
               <p>Del Aire Design and Development 2017</p>
                </div>
            </div>
        </footer>
 
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
     <script src="js/script.js"></script>
  
</body>

@endsection('content')




