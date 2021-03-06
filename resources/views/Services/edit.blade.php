@extends('layouts.index')

@section('content')
    <form action="/services/{{$services->id}}/update" method="post">
        @csrf
        <div class="form-group">
            <h1 class="text-center"><i class="{{$services->icone}}"></i><br></h1>
            <label class="h3">Icone</label>
            <input type="text" value="{{$services->icone}}" name="icone" id="" class="form-control">
            <p><i>Veuillez chercher l'icone que vous désirez et copier <b>seulement la classe</b> de l'icone, via le lien suivant <a href="https://fontawesome.com/icons?m=free" target="_blank">FontAwesome</a></i></p>

        </div>
        <div class="form-group">
            <label class="h3" for="">Titre :</label>
            <input type="text" value="{{$services->titre}}" name="titre" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="h3">Description :</label>
        <textarea class="form-control" name="description" rows="3">{{$services->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Mettre à jour</button>
    </form>
@endsection