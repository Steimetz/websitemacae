@extends('layout.app')
@section('content')
<br><br><br><br><br>
<div id="contact" class="contact-area">
<div class="container">
          
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contato</h2>
              </div>
            </div>
          
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Sua mensagem foi enviada, obrigado pelo contato!</div>
              <div id="errormessage"></div>
              {!! Form::open(['route' => 'criarComentario', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Seu nome'])}}
                </div>
                <div class="form-group">
                    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Seu email'])}}
                </div>
                <div class="form-group">
                    {{Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Asssunto'])}}
                </div>
                <div class="form-group">
                    {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Mensagem'])}}
                </div>
                <div class="text-center"><button type="submit">Enviar mensagem</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
  @endsection