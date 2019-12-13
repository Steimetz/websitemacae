@extends('pages.dashboard')
@section('conteudo')
<link href="{{URL::asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
<br><br>
 
 <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
          <div class="blog-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Notícias</h2>
                </div>
              </div>
            </div>
          
            <div class="row">
               @foreach($posts as $post)
              <!-- Start Left Blog -->
              <div style="margin-top:50px;"class="col-md-4 col-sm-4 col-xs-12">
                   
                   <div class="single-blog">
                      <div  style= "background-image: url(/storage/cover_images_noticias/{{$post->cover_image_noticias}}); padding-top: 56.25%;background-size:cover">
                     
                 
                                            
                      </div>
                      <div class="blog-meta">
                        <span class="date-type">
                                                <i class="fa fa-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}
                                            </span>
                      </div>
                      <div class="blog-text">
                        <h4>
                        <a href="blog.html">{{$post->titulo}}</a>
                                            </h4>
                        <p>{{$post->descricao}}
                        </p>
                      </div>
                      <span>
                      <a href="/noticias/{{$post->id}}" class="ready-btn">Ver mais</a>
                                        </span>
                    </div>
                    <!-- Start single blog -->
                  </div>
                  <div id="{{$post->id}}" class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true">
              
            </div>

                  @endforeach
                            <!-- Start single blog -->
                          </div>
              
              <!-- End Right Blog-->
            </div> 
          </div>
        </div>
      </div>
      <!-- End Blog -->
      @endsection