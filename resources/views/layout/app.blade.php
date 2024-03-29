<!doctype html>
<html lang="pt">
<head>

   
  <meta charset="utf-8">
  <title>SPE Macaé Section</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  
  <link href="{{URL::asset('img/macaelogo.png')}}" rel="icon">
  <link href="{{URL::asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File --> 
 
  <link href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{URL::asset('lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('lib/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Nivo Slider Theme -->


  <!-- Main Stylesheet File -->
  

  <!-- Responsive Stylesheet File -->
  <link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">
 

  
  
</head>

<body data-spy="scroll" data-target="#navbar-example">

 <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area stick">
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
                        <!--<li><a href="{{ route('register') }}">Register</a></li>-->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li>
                                    <a href="/home">
                                        Dashboard
                                    </a>

                                
                                </li>
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
                    <li>
                  
                    <a class="page-scroll" href="/contato">Contato</a>
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
  
@yield('content')

</body>

</html>
