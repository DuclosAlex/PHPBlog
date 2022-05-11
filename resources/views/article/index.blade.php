@extends('layout')

@section('content')

<div class="container">

    <h1 class="text-center mt-5">Articles</h1>
    <div class="d-flex justify-content-center">
        <a href="{{ route('article.create') }}" class="btn btn-success my-3">Ajouter un article <i class="fas fa-plus mx-1"></i></a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Date de création</th>
                <th scope="col">Gestion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $articles as $article)
                <tr class="table-info">
                    <td> {{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{$article->dateFormatted() }}</td>
                    <td class="d-flex">
                        <a href="#" class="btn btn-warning mx-3">Éditer</a>
                        <a href="#" class="btn btn-danger mx-3">Supprimer X</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-5">
        {{$articles->links('vendor.pagination.custom') }}

    </div>
        
</div>

@endsection