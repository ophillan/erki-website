@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-lg-offset-2">
            <h2 class="paragraph-heading" id="whatis">{{ trans('info.whatcauses') }}</h2>
            <p class="paragraph-text">{{ trans('info.whatcausestext1') }}</p>
            <p class="paragraph-text">{{ trans('info.whatcausestext2') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('info.symptoms') }}</h2>
            <p class="paragraph-text">{{ trans('info.symptomstext') }}</p>
            <ul>
                <li>{{ trans('info.symptoms1') }}</li>
                <li>{{ trans('info.symptoms2') }}</li>
                <li>{{ trans('info.symptoms3') }}</li>
                <li>{{ trans('info.symptoms4') }}</li>
            </ul>

            <hr>

            <h2 class="paragraph-heading" id="riskfactors">{{ trans('info.riskfactors') }}</h2>
            <p class="paragraph-text">{{ trans('info.riskfactortext1') }}</p>
            <p class="paragraph-text">{{ trans('info.riskfactortext2') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="treatment">{{ trans('info.treatment') }}</h2>
            <p class="paragraph-text">{{ trans('info.treatmenttext1') }}</p>
            <p class="paragraph-text">{{ trans('info.treatmenttext2') }}</p>

        </div>
    </div>

    <hr>

@stop