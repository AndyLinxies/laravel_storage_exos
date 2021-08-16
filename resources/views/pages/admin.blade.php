@extends('layouts.index')
@include('partials.nav')
@section('content')
<div class="container text-center mt-3">
    <h1>Page d'administration</h1>
    <h4>Fichiers ajoutés</h4>
    @foreach ($images as $image )
        <img src="{{asset('storage/img/'.$image->src)}}" alt="">
    @endforeach
    <a href="/fichier">Ajouter un fichier</a>
</div>
@endsection