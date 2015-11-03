@extends('template.template')

@section('content')

<table class="table table-hover table-striped">
	<thead>
	<tbody>
		<div class="col-lg-12">
            <form method="POST" action="/posts/create" enctype ="multipart/form-data">
                {!! csrf_field() !!}
                <fieldset>
                    <legend>Novo Post</legend>
	                <div >
		                <div class="form-group">
		                    <label for="photo">Foto:</label>
		                    <input type="file" name="photo" id="photo" class="form-control" required)>
		                </div>

		                <div class="form-group">
		                    <label for="description">Descrição:</label>
		                    <textarea name="description" rows="5" cols="50" class="form-control" required></textarea>
		                </div>
		                <div class="form-group">
		                    <button type="submit" class ="btn btn-outline btn-primary">Postar</button>
		                </div>
		            	</div>		
            	</fieldset>
            </form>
        </div>

	    @forelse($posts as $post)
	    <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    {{$post->name}} em {{$post->created_at}}
                </div>
                <div class="panel-body">
                    <a href="/posts/show/{{$post->id}}"><img src="/img/show/{{$post->id}}" class="img" width="50%" height="50%"></a>
                </div>
                <div class="panel-footer">
                    <a href="/posts/show/{{$post->id}}" type="button" class="btn btn-outline btn-primary btn-lg btn-block">Comentários <i class="fa fa-comment-o"></i></a>
                    
                </div>
            </div>
        </div>
    	@empty
    		<tr>
    			<td>Nenhum Post encontrado</td>
    		</tr>
    	@endforelse
    

	</tbody>
</table>
@stop