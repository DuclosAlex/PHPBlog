@extends('layout')

@section('title', 'Articles')

@section('content')

    <div>
        <h1 class="display-3 text_center">Liste des Articles</h1>
        <div class="articles row justify-content-center">
            @foreach ($articles as $article)
            <div class="card text-white bg-secondary mb-3 col-6">
                <div class="card-header">{{ $article->title }}</div>
                    <div class="card-body">
                    <p class="card-text">{{$article->content}}</p>
                    <a href="{{ route('article', $article->slug ) }}" class="btn btn-primary">
                        Lire la suite de l'article 
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    </div>
              </div>
            @endforeach

        </div>

        <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.pagination.custom') }}

        </div>
    </div>
    
@endsection