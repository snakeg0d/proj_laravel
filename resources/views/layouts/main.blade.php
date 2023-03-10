<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <title>@yield('tittle')</title>

        <link rel="stylesheet" href="{{url('css/styles.css')}}">
    </head>
    <body class="bg-dark">
        <header>
            <nav class="navbar navbar-expand-lg nabvar-light bg-secondary"  >
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="{{url('/')}}" class="navbar-brand">
                    <img src="{{url('/img/laravel.svg')}}" alt="Balflex" id="logo"></a>
                    
                    <ul class="navbar-nav" id="nav1">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link">Home</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="{{url('/events/create')}}" class="nav-link">Criar Evento</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/events/myevents')}}" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{url('/logout')}}" method="POST">
                                @csrf
                                <a href="{{url('/logout')}}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="{{url('/login')}}" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/register')}}" class="nav-link">Cadastrar</a>
                        </li>
                        @endguest

                    </ul>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
                @endif
            </div>
        </div>
        @yield('content')

     <footer>
        <p>Todos os direitos reservados &copy; BALFLEX - 2023</p>
     </footer>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>
