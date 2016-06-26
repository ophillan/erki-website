@extends('layouts.layout')

@section('content')
    <div class="row" id="contentrow">
        <div class="col-md-8 col-md-offset-2">
            <h2 id="causes">{{ trans('info.whatcauses') }}</h2>
            <p>{{ trans('info.whatcausestext1') }}</p>
            <p>{{ trans('info.whatcausestext2') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-8 col-md-offset-2">
            <h2 id="symptoms">{{ trans('info.symptoms') }}</h2>
            <ul>
                <li>{{ trans('info.symptoms1') }}</li>
                <li>{{ trans('info.symptoms2') }}</li>
                <li>{{ trans('info.symptoms3') }}</li>
                <li>{{ trans('info.symptoms4') }}</li>
                <li>{{ trans('info.symptoms5') }}</li>
            </ul>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-8 col-md-offset-2">
            <h2 id="riskfactors">{{ trans('info.riskfactors') }}</h2>
            <ul>
                <li>{{ trans('info.riskfactor1') }}</li>
                <li>{{ trans('info.riskfactor2') }}</li>
                <li>{{ trans('info.riskfactor3') }}</li>
                <li>{{ trans('info.riskfactor4') }}</li>
                <li>{{ trans('info.riskfactor5') }}</li>
                <li>{{ trans('info.riskfactor6') }}</li>
                <li>{{ trans('info.riskfactor7') }}</li>
                <li>{{ trans('info.riskfactor8') }}</li>
            </ul>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-8 col-md-offset-2">
            <h2 id="treatment">{{ trans('info.treatment') }}</h2>
            <p>{{ trans('info.treatmenttext') }}</p>
            <p>{{ trans('info.treatmentoptions') }}</p>

            <ul>
                <li>
                    <span class="text-highlight">{{ trans('info.treatmentoption1') }}</span> {{trans('info.treatmentoption1_text')}}
                </li>
                <li>
                    <span class="text-highlight">{{ trans('info.treatmentoption2') }}</span> {{trans('info.treatmentoption2_text')}}
                </li>
                <li>
                    <span class="text-highlight">{{ trans('info.treatmentoption3') }}</span> {{trans('info.treatmentoption3_text')}}
                </li>
            </ul>
        </div>
    </div>

@stop