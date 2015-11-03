@extends('template.template')

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                {{$post->name}} em {{$post->created_at}}
            </div>
            <div class="panel-body">
                <a href="/img/show/{{$post->id}}"><img src="/img/show/{{$post->id}}" class="img" width="100%" height="100%"></a>
                <ul class="list-inline" align="center">
                    <p class="lead">Descrição: {{$post->description}}</p>
                    <li>Abertura: {{$post->aperture}}</li>
                    <li>Tempo de Exposição: {{$post->exposure_time}}</li>
                    <li>ISO: {{$post->iso}}</li>
                    <li>Câmera: {{$post->camera}}</li>
                    <li>Distância Focal: {{$post->focal_length}}</li>
                </ul>
            </div>
        </div>
    </div>
<h2>Comentários</h2>
@forelse($comments as $comment)
	<div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{$comment->name}} ({{$comment->created_at}})
            </div>
            <div class="panel-body">
                <p>{{$comment->comment}}</p>
            </div>
        </div>
    </div>
@empty
	<p class="lead">Nenhum Comentário</p>
@endforelse

<form method="POST" action="/comments/create/{{$post->id}}" enctype ="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <textarea class="form-control" placeholder="Novo Comentário" name="comment" required></textarea>
    </div>

    <div>
        <button type="submit" class="btn btn-outline btn-primary">Comentar</button>
    </div>
</form>
<br>
@stop