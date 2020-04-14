@extends('layouts.index')

@section('content')
    <h1 class="text-center">Team</h1>
    {{-- Crud --}}
    <div class="row m-0 border-bottom mt-5">
        <div class="col-1">ID</div>
        <div class="col-3">Photo</div>
        <div class="col-2">Nom</div>
        <div class="col-2">Job</div>
        <div class="col-4">Actions</div>
    </div>
    @foreach ($teams as $team)
        <div class="row m-0 border-bottom my-2">
            <div class="col-1">{{$team->id}}</div>
            <div class="col-3">
                <div class="">
                    <img src="{{$team->photo}}" class="img-fluid" alt="">
                    {{$team->photo}}
                </div>
            </div>
            <div class="col-2">{{$team->name}}</div>
            <div class="col-2">{{$team->job}}</div>
            <div class="col-4">
                <a href="/team/{{$team->id}}/edit" class="btn btn-info">Modifier</a>
                <a href="/team/{{$team->id}}/destroy" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    @endforeach
    <div class="row m-0 d-flex justify-content-center">
        @if (count($teams) < 4)
            <a href="/team/create" class="btn btn-success btn-lg btn-block">Ajouter un membre de l'équipe</a>
        @endif
    </div>

@endsection