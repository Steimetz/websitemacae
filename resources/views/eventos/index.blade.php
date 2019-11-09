@extends('layout.app')



<section id="evento"  class="section-bg" >
<br><br>

    <div class="container">
        <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Eventos</h2>
                </div>
              </div>
            </div>


      
       
      <div class="row evento-container">
         @foreach($eventos as $evento)
        <div class="col-lg-4 col-md-6 evento-item filter-app wow fadeInUp">
          <div class="evento-wrap">
            <figure>
            <img style="width:100%" src="/storage/cover_images/{{$evento->cover_image}}" class="img-fluid" alt="">
              <a " data-lightbox="evento" data-toggle="modal" data-target="#{{$evento->id}}" class="link-preview" title="Preview"><i  class="fa fa-eye"></i></a>
              <a href="/eventos/{{$evento->id}}" class="link-details" ><i class="fa fa-list-alt"></i></a>
            </figure>
            <div id="{{$evento->id}}" class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="/storage/cover_images/{{$evento->cover_image}}" class="img-responsive">
                    </div>
                </div>
              </div>
            </div>
            <div class="evento-info">
            <h4><a>{{$evento->name}}</a></h4>
            <p>{{$evento->data}}</p>
            </div>
          </div>
        </div>

        

       

      

        
@endforeach
      </div>

    </div>
    </div>
  </div>
  </section><!-- #evento -->