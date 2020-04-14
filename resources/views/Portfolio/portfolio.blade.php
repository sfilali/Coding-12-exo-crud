@extends('layouts.index')

@section('content')
    <h1 class="text-center">Portfolio</h1>
    {{-- Crud --}}
    <div class="row m-0 border-bottom mt-5">
        <div class="col-1">ID</div>
        <div class="col-1">Image</div>
        <div class="col-2">Titre</div>
        <div class="col-4">Description</div>
        <div class="col-4">Actions</div>
    </div>
    @foreach ($portfolios as $portfolio)
        <div class="row m-0 border-bottom my-2">
            <div class="col-1">{{$portfolio->id}}</div>
            <div class="col-1">
                <div class="">
                    <img src="{{$portfolio->img_url}}" class="img-fluid" alt="">
                    {{$portfolio->img_url}}
                </div>
            </div>
            <div class="col-2">{{$portfolio->titre}}</div>
            <div class="col-4">{{$portfolio->description}}</div>
            <div class="col-4">
                <a href="/portfolio/{{$portfolio->id}}/edit" class="btn btn-info">Modifier</a>
                <a href="/portfolio/{{$portfolio->id}}/destroy" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    @endforeach
    <div class="row m-0 d-flex justify-content-center">
        <a href="/portfolio/create" class="btn btn-success btn-lg btn-block">Ajouter un Portfolio</a>
    </div>
@endsection