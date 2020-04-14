@extends('layouts.index')

@section('content')
    <form action="/team/store" method="post">
        @csrf
        <h1 class="text-center">Ajouter un membre de l'équipe<br></h1>
        <div class="form-group">
            <label class="h3">URL photo</label>
            <input type="text" value="" name="photo" id="" class="form-control">
            <p><i>Veuillez chercher l'image que vous désirez et copier son url, puis collez-le ci-dessus.</i></p>

        </div>
        <div class="form-group">
            <label class="h3" for="">Nom :</label>
            <input type="text" value="" name="name" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="h3" for="">job :</label>
            <input type="text" value="" name="job" id="" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter</button>
    </form>
@endsection