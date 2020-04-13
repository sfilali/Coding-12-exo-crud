@extends('layouts.index')

@section('content')
    <h1 class="text-center">Services</h1>
    {{-- Crud --}}
    <div class="row m-0 border-bottom mt-5">
        <div class="col-1">ID</div>
        <div class="col-1">Icone</div>
        <div class="col-2">Titre</div>
        <div class="col-4">Description</div>
        <div class="col-4">Actions</div>
    </div>
    @foreach ($services as $service)
        <div class="row m-0 border-bottom my-2">
            <div class="col-1">{{$service->id}}</div>
            <div class="col-1">
                <i class="{{$service->icone}}"></i>
            </div>
            <div class="col-2">{{$service->titre}}</div>
            <div class="col-4">{{$service->description}}</div>
            <div class="col-4">
                <a href="/services/{{$service->id}}/edit" class="btn btn-info">Modifier</a>
                <a href="/services/{{$service->id}}/destroy" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    @endforeach
    <div class="row m-0 d-flex justify-content-center">
        <a href="/services/create" class="btn btn-success btn-lg btn-block">Ajouter un Service</a>
    </div>

@endsection