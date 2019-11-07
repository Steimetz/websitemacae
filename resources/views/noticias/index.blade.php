@extends('layout.app')
 <!-- Start Blog Area -->
 <br><br>
 <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
          <div class="blog-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Ultimas notícias</h2>
                </div>
              </div>
            </div>
          
            <div class="row">
               @foreach($posts as $post)
              <!-- Start Left Blog -->
              <div style="margin-top:50px;"class="col-md-4 col-sm-4 col-xs-12">
                   
                   <div class="single-blog">
                      <div class="single-blog-img">
                        <a href="blog.html">
                                                <img src="https://www.stockvault.net/data/2018/10/22/255762/preview16.jpg" alt="">
                                            </a>
                      </div>
                      <div class="blog-meta">
                        <span class="date-type">
                                                <i class="fa fa-calendar"></i>{{$post->created_at}}
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

                  @endforeach
                            <!-- Start single blog -->
                          </div>
              
              <!-- End Right Blog-->
            </div> 
          </div>
        </div>
      </div>
      <!-- End Blog -->