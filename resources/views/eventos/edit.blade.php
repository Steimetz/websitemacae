@extends('layout.app')

<br><br><br><br><br>
<div class="container ">
    
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Editar evento</h2>
        </div>
      </div>
    
<div class="container">
{!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Título do evento')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Conteúdo')}}
    {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
</div>
<div class="form-group">
    {{Form::label('data', 'Data do evento')}}
    {{Form::date('date', '', [ 'class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('cover_image', 'Adicionar arte de divulgação')}}
    {{Form::file('cover_image')}}
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Adicionar', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
