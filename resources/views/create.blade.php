@extends('template.template')

@section('content')
<div class="col-lg-12">
    <img src="/img/show/{{$post->id}}" class="img" width="50%" height="50%">
    <button id="objecturltest">Object URL Test</button><br/>
    <form method="POST" action="/posts/update/{{$post->id}}" enctype ="multipart/form-data">
        {!! csrf_field() !!}
        <fieldset>
            <legend>Mais Informações</legend>
                
                <div class="form-group">
                    <label for="aperture">Abertura</label>
                    <input type="text" name="aperture" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label for="exposure_time">Tempo de Exposição</label>
                    <input type="text" name="exposure_time" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label for="iso">ISO</label>
                    <input type="text"  name="iso" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label for="camera">Câmera</label>
                    <input type="text"  name="camera" class="form-control"></input>
                </div>
                <div class="form-group">
                    <label for="focal_length">Distância Focal</label>
                    <input type="text"  name="focal_length" class="form-control"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class ="btn btn-outline btn-primary">Postar</button>
                </div>
                </div>      
        </fieldset>
    </form>
</div>
@stop