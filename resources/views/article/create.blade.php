@extends('layout')

@section('content')

<div class="container">
    <h1 class="text-cetner mt-5">Ajouter un nouvel article</h1>
    <form action="{{ route('article.store') }}" method="POST">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" name="title" class="form-control" placeholder="Titre de l'article">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="">Contenu</label>
                <textarea name="content" class="form-control w-100"></textarea>
            </div>
        </div>

        <div class="d-flex my-3 justify-content-center">
            <button class="btn btn-primary" type="submit">Postez l'article</button>
        </div>
    </form>
</div>

@endsection