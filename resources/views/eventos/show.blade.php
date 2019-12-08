@extends('layout.app')
@section('content')
<!-- Start About area -->

<div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
              <br><br>
          <h2>{{$evento->name}}</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                <img style="width:100%" src="/storage/cover_images/{{$evento->cover_image}}"  alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
          
              <a href="#">
                <h4 class="sec-head">Informações sobre o evento</h4>
              </a>
              <div class="post-body">
                
                 {!!$evento->body!!}
                
                <br><br>
               
                    
                  <h4 class="fa fa-calendar"></h4>{{ \Carbon\Carbon::parse($evento->data)->format('d/m/Y')}}
                <br><br>
               <a href=" http://{{$evento->link}}" ><button type="button" style="margin-left: 30%" class="btn btn-info">Cadastrar no evento</button></a>
            </div>
            </div>
          </div>
        
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->
@endsection