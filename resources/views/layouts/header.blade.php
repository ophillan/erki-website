<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#navHeaderCollapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div class="img-responsive" id="main-logo"></div>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="navHeaderCollapse">
    <ul class="nav navbar-nav">

        <!-- Homepage -->
        <li><a href="/">{{ strtoupper(trans('header.homepage')) }}</a></li>

        <!-- Osteoarthrosis -->
        <li class="dropdown">
            <a href="/public/info" class="dropdown-toggle" data-toggle="dropdown" role="button"
               aria-haspopup="true"
               aria-expanded="false">{{ strtoupper(trans('header.disease')) }}<span
                        class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/public/info#whatis">{{ trans('header.whatis') }}</a></li>
                <li><a href="/public/info#symptoms">{{ trans('header.symptoms') }}</a></li>
                <li><a href="/public/info#riskfactors">{{ trans('header.riskfactors') }}</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/public/info#treatment">{{ trans('header.treatment') }}</a></li>
            </ul>
        </li>

        <!-- Viscoplus -->
        <li><a href="/public/viscoplus">VISCOPLUS</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">

        <!-- Contact -->
        <li><a href="/public/contact">{{ strtoupper(trans('header.contact')) }}</a></li>

        <!-- Languages -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/img/flags/{{ \App::getLocale() }}_flag.png">
            </a>
            <ul class="dropdown-menu">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li>
                            <a href="/public/lang/{{ $lang }}"><img
                                        src="/img/flags/{{ $lang }}_flag.png"> {{$language}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
</div>