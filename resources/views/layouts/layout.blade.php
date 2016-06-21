<!DOCTYPE html>
<html lang="en" xml:lang="en">

<head>
    <title>Orthotrade</title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/body.css">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/media.css">

    <!-- Roboto -->
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>

<body>
<nav class="navbar navbar-default">
    @include('layouts.header')
</nav>
<div id="wrap">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>

<nav class="navbar navbar-inverse" id="footer">
    @include('layouts.footer')
</nav>

<!-- JavaScript and jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>

</html>
