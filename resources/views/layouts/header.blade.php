<!-- Brand and toggle get grouped for better mobile display -->
<div class="col-sm-12 col-md-10 col-md-offset-1">
    <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navHeaderCollapse" aria-expanded="false">MENÜÜ
        </button>

        <a class="img-responsive" id="main-logo" href="{{route('/')}}"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navHeaderCollapse">
        <ul class="nav navbar-nav">

            <!-- Homepage -->
            <li><a class="{{Request::routeIs('/') ? 'active-link' : ''}}"
                   href="{{route('/')}}">{{ strtoupper(trans('header.homepage')) }}</a></li>

            <!-- Osteoarthritis -->
            <li class="dropdown">
                <a class="{{Request::routeIs('info') ? 'active-link' : ''}}"
                   href="{{route('info')}}" role="button"
                   aria-haspopup="true"
                   aria-expanded="false">{{ strtoupper(trans('header.disease')) }}<span
                            class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('info', ['#causes'])}}">{{ trans('header.whatis') }}</a></li>
                    <li><a href="{{route('info', ['#symptoms'])}}">{{ trans('header.symptoms') }}</a></li>
                    <li><a href="{{route('info', ['#riskfactors'])}}">{{ trans('header.riskfactors') }}</a></li>
                    <li><a href="{{route('info', ['#treatment'])}}">{{ trans('header.treatment') }}</a></li>
                </ul>
            </li>

            <!-- Viscoplus -->
            <li><a class="{{Request::routeIs('viscoplus') ? 'active-link' : ''}}"
                   href="{{route('viscoplus')}}">VISCOPLUS</a></li>

            <!-- FAQ -->
            <li class="dropdown">
                <a class="{{Request::routeIs('faq') ? 'active-link' : ''}}"
                   href="{{route('faq')}}" role="button"
                   aria-haspopup="true"
                   aria-expanded="false">{{ strtoupper(trans('header.faq')) }}<span
                            class="caret"></span></a>
                <ul class="dropdown-menu" id="faq-menu">
                    <li><a href="{{route('faq', ['#doesithurt'])}}">{{ trans('header.faq1') }}</a></li>
                    <li><a href="{{route('faq', ['#duration'])}}">{{ trans('header.faq2') }}</a></li>
                    <li><a href="{{route('faq', ['#canwalk'])}}">{{ trans('header.faq3') }}</a></li>
                    <li><a href="{{route('faq', ['#canrepeat'])}}">{{ trans('header.faq4') }}</a></li>
                    <li><a href="{{route('faq', ['#differences'])}}">{{ trans('header.faq5_1') }}
                            <br> {{ trans('header.faq5_2') }}</a></li>
                    <li><a href="{{route('faq', ['#sideeffects'])}}">{{ trans('header.faq6') }}</a></li>
                    <li><a href="{{route('faq', ['#precautions'])}}">{{ trans('header.faq7') }}</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <!-- Languages -->
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <li><a href="{{route('lang', ['lang' => $lang])}}"><img alt="{{ strtoupper($lang) }}"
                                                                            src="/img/flags/{{ $lang }}_flag.png"></a>
                    </li>
                @else
                    <li><a class="active-locale" href="{{route('lang', ['lang' => $lang])}}"><img
                                    alt="{{ strtoupper($lang) }}"
                                    src="/img/flags/{{ $lang }}_flag.png"></a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>