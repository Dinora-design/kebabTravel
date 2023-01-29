<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Admin/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
    </head>
    <body class="hold-transition sidebar-mini layout-navbar-fixed">
        <div class="wrapper">
        
          <!-- Navbar -->
          <nav class="navbar navbar-expand-md " id="header-menu" >
            <div class="container">
              <a href="{{route('/')}}" class="navbar-brand white-logo" >
                <img width="150px" src="https://see.fontimg.com/api/renderfont4/w1OB8/eyJyIjoiZnMiLCJoIjo1NywidyI6MTEwMCwiZnMiOjUyLCJmZ2MiOiIjRkZGQkZCIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/S2ViYWJUcmF2ZWw/millenia-personal-use.png" alt="">
              </a>
              <a href="{{route('/')}}" class="navbar-brand black-logo">
                <img width="150px" src="https://see.fontimg.com/api/renderfont4/rg9Rx/eyJyIjoiZnMiLCJoIjo3MiwidyI6MTEwMCwiZnMiOjY1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/S2ViYWJUcmF2ZWw/ananda-black-personal-use-regular.png" alt="">
              </a>
        
              <div class="collapse navbar-collapse order-3 ">
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
                <video src="videoplayback.mp4" autoplay loop muted></video>
            </div>
            <div class="header-overlay">
                <div class="header-content">
                    <p class="text-5">
                    Traveling allows you to see the beauty of the creation. It enriches you in more ways than you can imagine. There is beauty in every part of our magnificent planet.
                    </p>
                </div>
            </div>
        </div>
       

        <div class="section section-a pt-2">
            <div class="container">
                <div class="row mt-4 mb-4">
                    @foreach ($menus as $menu)
                        <div class="col-md-3 col-xs-4 col-6 p-2 mt-2">
                            <a href="{{route('places-to-go', $menu->city_tag)}}" class="link-featurebox">
                                <img class="featured-box featured-box-primary featured-box-effect-7 m-0 img-fluid featured-box-regione lazyload" src="{{url('Admin/img/city_images/'.$menu->city_img)}}" alt="{{$menu->city_name}}" title="{{$menu->city_name}}" style="object-fit: cover; width: 100%;">
                                <h5 class="text-4 mt-3 mb-2 text-dark text-capitalize">{{$menu->city_name}}</h5>
                                <p class="text-1 line-height-2 mb-0 text-dark ">{{$menu->city_title}}</p>
                            </a>
                        </div>   
                    @endforeach 
                </div>
            </div>
        </div>

        <div class="footer py-5 ">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h5>Kebab Travel</h5>
                <p class="pt-2">Traveling allows you to see the beauty of the creation. It enriches you in more ways than you can imagine. There is beauty in every part of our magnificent planet.</p>
              </div>
              <div class="col-md-3 pt-md-0 pt-3">
                <h5>Destinations</h5>
                @foreach ($menus as $item)
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a href="{{route('places-to-go', $item->city_tag)}}" class="nav-link"><span class="px-1">></span>{{$item->city_tag}}</a>
                      </li>
                    </ul>
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
        <script src="Admin/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="Admin/dist/js/adminlte.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script>
            function scrollHeader(){
            let navBottom = document.getElementById('header-menu')
            if(this.scrollY >= 50) navBottom.classList.add('main-menu-container'); else navBottom.classList.remove('main-menu-container')
            }
            window.addEventListener('scroll', scrollHeader)

            const toggleButton = document.getElementsByClassName('menubar')[0]
            const navbarLinks = document.getElementsByClassName('mobile-main-menu')[0]

            if(toggleButton){
              toggleButton.addEventListener('click', () => {
                navbarLinks.classList.toggle('mobile-active')
                toggleButton.classList.toggle('change')
              })
            }
        </script>    
    </body>
</html>
