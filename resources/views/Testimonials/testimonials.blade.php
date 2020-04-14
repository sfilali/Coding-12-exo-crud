@extends('layouts.index')

@section('content')
    <h1 class="text-center">Testimonials</h1>
    {{-- Crud --}}
    <div class="row m-0 border-bottom mt-5">
        <div class="col-1">ID</div>
        <div class="col-1">Photo</div>
        <div class="col-1">Nom</div>
        <div class="col-1">Inc</div>
        <div class="col-4">Quote</div>
        <div class="col-4">Actions</div>
    </div>
    @foreach ($testimonials as $testimonial)
        <div class="row m-0 border-bottom my-2">
            <div class="col-1">{{$testimonial->id}}</div>
            <div class="col-1">
                <div class="">
                    <img src="{{$testimonial->picture}}" class="img-fluid" alt="">
                    {{$testimonial->picture}}
                </div>
            </div>
            <div class="col-1">{{$testimonial->name}}</div>
            <div class="col-1">{{$testimonial->inc}}</div>
            <div class="col-4">"{{$testimonial->quote}}"</div>
            <div class="col-4">
                <a href="/testimonials/{{$testimonial->id}}/edit" class="btn btn-info">Modifier</a>
                <a href="/testimonials/{{$testimonial->id}}/destroy" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    @endforeach
    <div class="row m-0 d-flex justify-content-center">
        @if (count($testimonials) < 4)
            <a href="/testimonials/create" class="btn btn-success btn-lg btn-block">Ajouter un Testimonial</a>
        @endif
    </div>

@endsection