<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/Admin/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/Admin/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="/css/mystyle.css">
    </head>
    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
        
          <!-- Navbar -->
          <nav class=" navbar navbar-expand-md " id="header-menu">
            <div class="container">
              <a href="{{route('/')}}" class="navbar-brand white-logo" >
                <img width="150px" src="https://see.fontimg.com/api/renderfont4/w1OB8/eyJyIjoiZnMiLCJoIjo1NywidyI6MTEwMCwiZnMiOjUyLCJmZ2MiOiIjRkZGQkZCIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/S2ViYWJUcmF2ZWw/millenia-personal-use.png" alt="">
              </a>
              <a href="{{route('/')}}" class="navbar-brand black-logo">
                <img width="150px" src="https://see.fontimg.com/api/renderfont4/rg9Rx/eyJyIjoiZnMiLCJoIjo3MiwidyI6MTEwMCwiZnMiOjY1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/S2ViYWJUcmF2ZWw/ananda-black-personal-use-regular.png" alt="">
              </a>
             
        
              <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul  class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                  <li class="nav-item">
                    <a href="{{route('/')}}" class="nav-link text-bold">Destinations</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link text-bold">Magazine</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link text-bold">Tickets</a>
                  </li>
                </ul>
              </div>
              <div class="mobile-main-menu" >
                <a href="{{route('/')}}" class="nav-link text-bold">Destinations</a>
                <a href="#" class="nav-link text-bold">Magazine</a>
                <a href="#" class="nav-link text-bold">Tickets</a>
              </div>
               
              <div class="menubar">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
            </div>
          </nav>
          
          
        <div class="video-header wrap">
            <div class="fullscreen-video-wrap">
                <img  src="https://www.turkestantravel.com/wp-content/uploads/2020/11/Poi-Kalon.jpg" alt="">
            </div>
            <div class="header-overlay">
                <div class="header-content">
                    <h2>{{$menu->city_name}}</h2>
                    <p class="text-5">
                    {{$menu->city_title}}
                    </p>
                </div>
            </div>
        </div>
        <div class="section section-a bg-img">
            <div class="container">
              <div class="py-2">
                  <a class="text-dark" href="{{route('/')}}">Uzbekistan</a><span class="px-1">></span><a class="text-dark" href="{{route('places-to-go', $menu->city_tag)}}">{{$menu->city_tag}}</a>
              </div>
            </div>
              
        </div>

        <div class="section section-a py-5">
            <div class="container">
                <div class="row pt-1">
                    <div class="col-md-5">
                      <div class="container">
                        <div class="mySlides">
                          <img src="{{url('Admin/img/city_images/'.$menu->city_img)}}" style="width:100%">
                        </div>      
                        <div class="mySlides">
                          @if (!empty($menu['city_img1']))
                            <img src="{{url('Admin/img/city_images/'.$menu->city_img1)}}" style="width:100%">
                          @else
                          <img src="{{url('Admin/img/city_images/'.$menu->city_img1)}}" style="display:none">
                          @endif
                        </div>
                        <div class="mySlides">
                          @if (!empty($menu['city_img2']))
                            <img src="{{url('Admin/img/city_images/'.$menu->city_img2)}}" style="width:100%">
                          @else
                          <img src="{{url('Admin/img/city_images/'.$menu->city_img2)}}" style="display:none">
                          @endif
                        </div>
                        <div class="mySlides">
                          @if (!empty($menu['city_img3']))
                            <img src="{{url('Admin/img/city_images/'.$menu->city_img3)}}" style="width:100%">
                          @else
                          <img src="{{url('Admin/img/city_images/'.$menu->city_img3)}}" style="display:none">
                          @endif
                        </div>
                    
                        <div class="row" style="margin: 0">
                          <div class="column">
                            <img class="demo cursor" src="{{url('Admin/img/city_images/'.$menu->city_img)}}" style="width:100%" onclick="currentSlide(1)" alt="">
                          </div>
                          <div class="column">
                            @if (!empty($menu['city_img1']))
                              <img class="demo cursor" src="{{url('Admin/img/city_images/'.$menu->city_img1)}}" style="width:100%" onclick="currentSlide(2)" alt="">
                            @else
                              <img class="demo cursor" style="display: none" src="{{url('Admin/img/city_images/'.$menu->city_img1)}}" style="width:100%" onclick="currentSlide(2)" alt="">
                            @endif
                          </div>
                          <div class="column">
                            @if (!empty($menu['city_img2']))
                              <img class="demo cursor" src="{{url('Admin/img/city_images/'.$menu->city_img2)}}" style="width:100%" onclick="currentSlide(3)" alt="">
                            @else
                              <img class="demo cursor" style="display: none" src="{{url('Admin/img/city_images/'.$menu->city_img3)}}" style="width:100%" onclick="currentSlide(2)" alt="">
                            @endif
                          </div>
                          <div class="column">
                            @if (!empty($menu['city_img3']))
                              <img class="demo cursor" src="{{url('Admin/img/city_images/'.$menu->city_img3)}}" style="width:100%" onclick="currentSlide(4)" alt="">
                            @else
                              <img class="demo cursor" style="display: none" src="{{url('Admin/img/city_images/'.$menu->city_img3)}}" style="width:100%" onclick="currentSlide(4)" alt="">
                            @endif
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-md-7 pt-4 pt-md-0">
                        <p>{{strip_tags($menu->city_text)}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer py-5 mt-3">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h5>Kebab Travel</h5>
                <p class="pt-2">Traveling allows you to see the beauty of the creation. It enriches you in more ways than you can imagine. There is beauty in every part of our magnificent planet.</p>
              </div>
              <div class="col-md-3 pt-md-0 pt-3">
                <h5>Destinations</h5>
                @foreach ($menu as $menu)
                    {{$menu['city_tag']}}
                @endforeach
              </div>
              <div class="col-md-3 pt-md-0 pt-3">
                <h5>Magazine</h5>
              </div>
              <div class="col-md-2 pt-md-0 pt-3">
                <h5>Tiskets</h5>
              </div>
            </div>
          </div>
        </div>
        
        <!-- jQuery -->
        <script src="/Admin/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/Admin/dist/js/adminlte.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script>
          function scrollHeader(){
          let navBottom = document.getElementById('header-menu')
          if(this.scrollY >= 50) navBottom.classList.add('main-menu-container'); else navBottom.classList.remove('main-menu-container')
          }
          window.addEventListener('scroll', scrollHeader);

          const toggleButton = document.getElementsByClassName('menubar')[0]
          const navbarLinks = document.getElementsByClassName('mobile-main-menu')[0]

          if(toggleButton){
            toggleButton.addEventListener('click', () => {
              navbarLinks.classList.toggle('mobile-active')
              toggleButton.classList.toggle('change')
            })
          }
          let slideIndex = 1;
          showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
          }
      </script>   
      </body>
</html>
