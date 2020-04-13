@extends('layouts.index')

@section('content')
    <form action="/services/store" method="post">
        @csrf
        <div class="form-group">
            <h1 class="text-center">Créer un Service<br></h1>
            <label class="h3">Icone</label>
            <input type="text" value="" name="icone" id="" class="form-control">
            <p><i>Veuillez chercher l'icone que vous désirez et copier <b>seulement la classe</b> de l'icone, via le lien suivant <a href="https://fontawesome.com/icons?m=free" target="_blank">FontAwesome</a></i></p>

        </div>
        <div class="form-group">
            <label class="h3" for="">Titre :</label>
            <input type="text" value="" name="titre" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="h3">Description :</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>
    </form>
@endsection