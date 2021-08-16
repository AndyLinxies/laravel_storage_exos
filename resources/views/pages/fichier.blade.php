@extends('layouts.index')
@include('partials.nav')
@section('content')
    <div class="container mt-3 text-center">
        <h1>Ajout de fichier</h1>
        <form action='/fichier' method='post' enctype='multipart/form-data'>
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Uploadez votre fichier</label>
                <input type="file" class="form-control" name='src'>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
@endsection
