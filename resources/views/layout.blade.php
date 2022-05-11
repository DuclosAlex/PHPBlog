<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home') }}">LaraBlog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('articles') }}">Articles
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                  @if (Auth::user())
                    @if(Auth::user()->role === 'ADMIN')
                      <li class="nav-item">
                        <a class="nav-link active" href="{{route('article.index') }}">Espace Admin</a>
                      </li>

                    @endif

                    <li class="nav-item">
                      <form method="POST" action="{{route('logout') }}">
                        @csrf
                        <button type="submit" class="btn">Déconnexion</button>
                      </form>
                    </li>
                  @else 
                    <li class="nav-item">
                      <a class="nav-link active" href="{{route('login') }}">Connexion</a>
                    </li>

                  @endif
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main class="container my-3">
        @yield('content')
    </main>
    
    <footer>
        
    </footer>
</body>
</html>