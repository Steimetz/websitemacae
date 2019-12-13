@extends('layout.app')
@section('content')

  <!-- Start About area -->
  <div   class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Sobre o SPE Macae Section</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="img/about/1.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">O que somos</h4>
              </a>
              <p>
                Ai escreve
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Item 1
                </li>
                <li>
                  <i class="fa fa-check"></i> Item 2
                </li>
                <li>
                  <i class="fa fa-check"></i> Item 3
                </li>
                <li>
                  <i class="fa fa-check"></i> Item 4
                </li>
                <li>
                  <i class="fa fa-check"></i> Item 5
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Próximos eventos</h2>
          </div>
        </div>
      </div>
      
      
       
        <div class="awesome-project-content">
         @foreach($eventos as $evento)
          <div class="col-md-4 col-sm-4 col-xs-12 ">
            <div class="single-awesome-project">
              <div class="awesome-img">
             <a class="venobox"  href="/storage/cover_images/{{$evento->cover_image}}">
              <div  style= "background-image: url(/storage/cover_images/{{$evento->cover_image}}); padding-top: 70%;background-size:cover">
                <div class="add-actions text-center">
                  <div class="project-dec">
                    
                      <h4 style="color:white">{{$evento->name}}</h4>
                      
                    
                    </div>
                  </div>
                </div>
</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Últimas notícias</h2>
          </div>
        </div>
      </div>
      
      
       
        <div class="awesome-project-content">
           @foreach($noticias as $noticia)
          <div class="col-md-4 col-sm-4 col-xs-12 ">
            <div class="single-awesome-project">
              <div class="awesome-img">
             <a class="venobox"  href="/storage/cover_images_noticias/{{$noticia->cover_image_noticias}}">
              <div  style= "background-image: url(/storage/cover_images_noticias/{{$noticia->cover_image_noticias}}); padding-top: 70%;background-size:cover">
                <div class="add-actions text-center">
                  <div class="project-dec">
                    
                      <h4 style="color:white">{{$noticia->titulo}}</h4>
                      
                    
                    </div>
                  </div>
                </div>
</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @endsection
   
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}
</script>

</body>
