@extends('layout.app')
@section('content')
<br><br><br><br><br>
<div class="container ">
    
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Adicionar notícia</h2>
        </div>
      </div>
    
<div class="container">
{!! Form::open(['action' => 'NoticiasController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('titulo', 'Título da notícia')}}
    {{Form::text('titulo', '', ['class' => 'form-control', 'placeholder' => 'Título da notícia'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Conteúdo')}}
    {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Conteúdo da notícia'])}}
</div>
<div class="form-group">
    {{Form::label('descricao', 'Descrição')}}
    {{Form::textarea('descricao', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Descrição'])}}
</div>
<div class="form-group">
    {{Form::label('cover_image', 'Adicionar arte de divulgação')}}
    {{Form::file('cover_image_noticias')}}
</div>
{{Form::submit('Adicionar', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection