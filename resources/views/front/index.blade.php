@extends('layouts.front')

@section('content')
    <div class="slider">
        <div id="about-slider">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset("assets/img/slide1a.jpg")}}" class="img-responsive" alt="">

                    </div>

                    <div class="item">
                        <img src="{{asset("assets/img/slide1b.jpg")}}" class="img-responsive" alt="">

                    </div>
                    <div class="item">
                        <img src="{{asset("assets/img/slide1c.jpg")}}" class="img-responsive" alt="">

                    </div>
                </div>

                <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

                <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div> <!--/#carousel-slider-->
        </div><!--/#about-slider-->
    </div><!--/#slider-->

    <div class="container">
        <div class="intro">
            <h2 class="title">Welcome To Laravel Learning Class</h2>
            <p class="paragraph">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
                <br><br>
                Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.
                <br><br>
                Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.</p>
        </div>

        <div class="services">
            <h2 class="title">Series Lessons</h2>
            <ul>
                <li>Meet Composer</li>
                <li>Virtual Machines & Homestead</li>
                <li>A Gentle Introduction to Routing, Controllers, and Views </li>
                <li>Passing Data to Views</li>
                <li>Blade 101</li>
                <li>Environments and Configuration </li>
            </ul>
        </div>
    </div>
@endsection