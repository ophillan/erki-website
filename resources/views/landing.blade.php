@extends('layouts.layout')

@section('content')

        <!-- First block -->
<div class="row">
    <div class="col-md-6">
        <h2 class="paragraph-heading">
            {{ trans('landing.whatis') }}
        </h2>
        <p class="paragraph-text">{{ trans('landing.whatistext1') }}</p>
        <p class="paragraph-text">{{ trans('landing.whatistext3') }}</p>

        <h2 class="paragraph-heading">
            {{ trans('landing.symptoms') }}
        </h2>
        <p class="paragraph-text">{{ trans('landing.symptomstext') }}</p>
        <ul>
            <li>{{ trans('landing.symptoms1') }}</li>
            <li>{{ trans('landing.symptoms2') }}</li>
            <li>{{ trans('landing.symptoms3') }}</li>
            <li>{{ trans('landing.symptoms4') }}</li>
        </ul>
    </div>

    <div class="col-md-6">
        <img src="/img/landing/oa_knee.png" alt="Osteoarthritis" class="img-responsive paragraph-image">
    </div>
</div>

<hr>

<!-- Second block -->
<div class="row">
    <div class="col-md-6">
        <img src="/img/landing/viscoplus.png" alt="Viscoplus" class="img-responsive paragraph-image">
    </div>
    <div class="col-md-6">
        <h2 class="paragraph-heading">
            {{ trans('landing.whatweoffer') }}
        </h2>
        <p class="paragraph-text">{{ trans('landing.whatweoffertext1') }}</p>
        <p class="paragraph-text">{{ trans('landing.whatweoffertext2') }}</p>
        <p class="paragraph-text">{{ trans('landing.whatweoffertext3') }}</p>
    </div>
</div>
@stop