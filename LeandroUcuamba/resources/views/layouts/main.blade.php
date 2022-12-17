<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- link css -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        
        <!-- link bootstrap -->
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

        <!-- link MaterialDesign-Icon -->
        <link rel="stylesheet" href="/MaterialDesign/css/materialdesignicons.css">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                       <img src="/img/logo.png" alt="Unia Eventos">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar eventos</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST" >
                                @csrf
                                <a href="/logout" 
                                    class="nav-link" 
                                    onclick="event.preventDefault();
                                      this.closest('form').submit();">
                                Sair</a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        
        <main>
            <div class="container-fluid">
                <div class="row">
                  @if (session('msg'))
                     <p class="msg">{{ session('msg') }}</p>
                  @endif
                  @yield('content')
                </div>
            </div>
        </main>
        <footer>
           <p>Unia Eventos &copy; 2022</p>
        </footer>

       <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>