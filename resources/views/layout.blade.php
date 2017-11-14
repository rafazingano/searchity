<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="QUIZ RZ ESTUDIO">
        <meta name="author" content="Rafael Zingano">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>QUIZ RZ ESTUDIO</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-xl-6 col-lg-6">
                        <a href="{{ route('home') }}">
                            <h3 class="masthead-brand">QUIZ RZ ESTUDIO</h3>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <hr/>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-xl-12 col-lg-12">
                        <p>Desenvolvido por  <a href="mailtro::rafazingano@gmail.com">Rafael Zingano</a> para <a href="http://dzestudio.com.br/">DZ Estudio</a>.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>
        <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
    </body>
</html>