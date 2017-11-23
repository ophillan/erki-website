@extends('layouts.layout')

@section('title', trans('landing.title'))

@section('content')

    <!-- First block -->
    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="col-sm-6">
                <h2>{{ trans('landing.whatis') }}</h2>
                <p>{{ trans('landing.whatistext') }}</p>

                <h2>{{ trans('landing.symptoms') }}</h2>
                <p>{{ trans('landing.symptomstext') }}</p>
            </div>

            <div class="col-sm-6">
                <picture>
                    <source media="(max-width: 768px)" srcset="/img/landing/osteo_{{ App::getLocale() }}.png">
                    <source media="(min-width: 769px) and (max-width: 1400px)" srcset="/img/landing/osteo-small_{{ App::getLocale() }}.png">
                    <source media="(min-width: 1401px)" srcset="/img/landing/osteo_{{ App::getLocale() }}.png">
                    <img id="picture1" class="img-responsive" src="/img/landing/osteo.png_{{ App::getLocale() }}" alt="Osteoartriit">
                </picture>
            </div>


        </div>
    </div>

    <!-- Second block -->
    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="col-sm-6"><img src="/img/landing/viscoplus.png" alt="ViscoPlus" class="img-responsive"></div>
            <div class="col-sm-6">
                <h2>{{ trans('landing.whatweoffer') }}</h2>
                <p>{{ trans('landing.whatweoffertext') }}</p>
            </div>
        </div>
    </div>
@stop