@extends('layout.app')
@section('content')
<script>
    tinymce.init({
      selector: '#myeditor'
    });
    </script>
<br><br><br><br><br>
<div class="container ">
    
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Adicionar evento</h2>
        </div>
      </div>
    
<div class="container">
{!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('name', 'Título do evento')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Título'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Conteúdo')}}
    {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Conteúdo'])}}
</div>
<div class="form-group">
    {{Form::label('data', 'Data do evento')}}
    {{Form::date('data', '', [ 'class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('cover_image', 'Adicionar arte de divulgação')}}
    {{Form::file('cover_image')}}
</div>
<div class="form-group">
    {{Form::label('link', 'Link para o Sympla')}}
    {{Form::text('link', '', [ 'class' => 'form-control'])}}
</div>
{{Form::submit('Adicionar', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection