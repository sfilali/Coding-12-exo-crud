@extends('layouts.index')

@section('content')
    <form action="/testimonials/{{$testimonials->id}}/update" method="post">
        @csrf
        <h1 class="text-center">Modifier un Testimonial<br></h1>
        <div class="form-group">
            <label class="h3">URL photo</label>
            <input type="text" value="{{$testimonials->picture}}" name="picture" id="" class="form-control">
            <p><i>Veuillez chercher l'image que vous désirez et copier son url, puis collez-le ci-dessus.</i></p>

        </div>
        <div class="form-group">
            <label class="h3" for="">Nom :</label>
            <input type="text" value="{{$testimonials->name}}" name="name" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="h3" for="">inc :</label>
            <input type="text" value="{{$testimonials->inc}}" name="inc" id="" class="form-control">
        </div>
        <div class="form-group">
            <label class="h3">Quote :</label>
        <textarea class="form-control" name="quote" rows="3">{{$testimonials->quote}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Mettre à jour</button>
    </form>
@endsection