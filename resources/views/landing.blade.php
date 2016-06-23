@extends('layouts.layout')

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

            <div class="col-sm-6"><img id="picture1" src="/img/landing/osteo.png" alt="Osteoarthritis" class="img-responsive"></div>
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