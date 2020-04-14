@extends('layouts.index')

@section('content')
    <form action="/portfolio/store" method="post">
        @csrf
        <h1 class="text-center">Modifier un Portfolio<br></h1>
        <div class="form-group">
            <label class="h3">URL image</label>
            <input type="text" value="" name="img_url" id="" class="form-control">
            <p><i>Veuillez chercher l'image que vous désirez et copier son url, puis collez-le ci-dessus.</i></p>

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