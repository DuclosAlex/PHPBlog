@extends('layout')

@section('title', 'Article')

@section('content')

    <div>
        <h2 class="display-4 text-center">{{ $article->title }}</h2>
        <div class="d-flex justify-content-center my-5">
            <a href="{{ route('articles') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left"> Retour</i>
            </a>

        </div>        
    </div>

    <div class="container">
        <p class="text-center">{{ $article->content }}</p>
    </div>
    
@endsection