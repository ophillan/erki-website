<!DOCTYPE html>
<html lang="en" xml:lang="en">

<head>
    <title>Erki leht</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/body.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/media.css">
</head>

<body>

<div id="wrap">

    <nav class="navbar navbar-default">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navHeaderCollapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/" class="navbar-brand"><img alt="Kodu" src="/img/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navHeaderCollapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">{{ strtoupper(trans('welcome.homepage')) }}</a></li>
                    <li><a href="/info"> {{ strtoupper(trans('welcome.disease')) }}</a></li>
                    <li><a href="/vpone">VISCOPLUS ONE</a></li>
                    <li><a href="/vpgel">VISCOPLUS GEL</a></li>

                    <!-- Language chooser -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/img/{{ \App::getLocale() }}_logo.png">
                        </a>
                        <ul class="dropdown-menu">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <li>
                                        <a href="{{ $lang }}/lang/{{ $lang }}"><img src="/img/{{ $lang }}_logo.png"> {{$language}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>

            </div>


        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <nav class="navbar navbar-default" id="footer">
        <div class="container">
            <div class="col-sm-12 text-center navbar-text">
                MTÜ WBG | J. Liivi 2 | +372 59035823 | mart.magi@outlook.com
            </div>
        </div>
    </nav>

</div>

</body>

</html>
