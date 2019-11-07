<!doctype html>
<html lang="en">
<head>
   
  <meta charset="utf-8">
  <title>SPE Macaé Section</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{URL::asset('img/favicon.png')}}" rel="icon">
  <link href="{{URL::asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{URL::asset('lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{URL::asset('css/nivo-slider-theme.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">
  <script src="{{URL::asset('https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js')}}" referrerpolicy="origin"></script>

  

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="/">
                  
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <div class="logo-image">
                   <img src="{{URL::asset('img/macaelogo.png')}}" margin-bottom= "10px"  width="98px" alt="" title=""> 
                  </div>
                  </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">

                  <li>
                    <a class="page-scroll" href="/sobre">Sobre</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="/noticias">Notícias</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="/eventos">Eventos</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="/equipe">Equipe</a>
                  </li>
                  <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            
                 

                 <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Down<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href=# >Drop Down 1</a></li>
                      <li><a href=# >Drop Down 2</a></li>
                    </ul> 
                  </li>

                  <li>
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li>
                -->
                  <li>
                  
                    <a class="page-scroll" href="#contact">Contato</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->  <!-- JavaScript Libraries -->
  <script src="{{URL::asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('lib/venobox/venobox.min.js')}}"></script>
  <script src="{{URL::asset('lib/knob/jquery.knob.js')}}"></script>
  <script src="{{URL::asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{URL::asset('lib/parallax/parallax.js')}}"></script>
  <script src="{{URL::asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{URL::asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('lib/appear/jquery.appear.js')}}"></script>
  <script src="{{URL::asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="{{URL::asset('js/main.js')}}"></script>
  <script src="{{URL::asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
  <script>
      CKEDITOR.replace( 'editor' );
  </script>
</body>
@yield('content')
<footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                  <div class="footer-logo">
                      <img src="{{URL::asset('img/macaelogo.png')}}" margin-bottom= "10px"  width="100%" alt="" title=""> 
                     </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          
        </div>
      </div>
    </div>
    </footer>
</html>
