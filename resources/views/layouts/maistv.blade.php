<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>MAISTV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Jquery -->
        <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

        <!-- bootstrap 4.1 jS -->
        <script type="text/javascript" src="{{ asset('js/bootstrap-4.1.0/bootstrap.bundle.min.js') }}"></script>

        <!-- bootstrap 4.1 CSS -->
        <link href="{{ asset('css/bootstrap-4.1.0/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MAISTV CSS -->
        <link href="{{ asset('css/maistv.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
             @yield('style')
        </style>

        <!-- scripts -->
        @yield('script')

    </head>
    <body>
        <header class="container col-12">
            @if (Route::has('login'))
            
            @auth
                <span><b>Bem-vindo: {{ Auth::user()->name }} </b></span>
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                            
                @else
                <a href="{{ route('login') }}">Login</a>
    
            @endauth
          
            @endif
        </header>

        <section class="container">
            @yield('content')      
        </section>

        <footer>
            @yield('footer')
        </footer>
        
    </body>
</html>
