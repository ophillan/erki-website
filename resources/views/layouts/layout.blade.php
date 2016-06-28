<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <title>Orthotrade</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/logos/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="{{ trans('header.description') }}"/>
    <meta charset="UTF-8"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"
          href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>

    <!-- Roboto -->
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'/>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/all.css"/>
</head>

<body>
<!-- Header -->
<nav class="navbar navbar-inverse">
    @include('layouts.header')
</nav>

<!-- Body -->
<div id="wrap">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>

<!-- Footer -->
<nav class="navbar navbar-inverse" id="footer">
    @include('layouts.footer')
</nav>

<!-- JavaScript and jquery for dropdown links -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>
