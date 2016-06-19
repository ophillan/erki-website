@extends('layouts.layout')

@section('content')

        <!-- First block -->
<div class="row">
    <div class="col-md-6">
        <h2 class="paragraph-heading">
            {{ trans('landing.whatis') }}
        </h2>
        <p class="paragraph-text">{{ trans('landing.whatistext') }}</p>

        <h2 class="paragraph-heading">
            {{ trans('landing.symptoms') }}
        </h2>
        <p class="paragraph-text">{{ trans('landing.symptomstext') }}</p>
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
        <p class="paragraph-text">{{ trans('landing.whatweoffertext') }}</p>
    </div>
</div>
@stop