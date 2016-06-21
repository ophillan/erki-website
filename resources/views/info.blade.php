@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2 class="paragraph-heading" id="whatis">{{ trans('info.whatcauses') }}</h2>
            <p class="paragraph-text">{{ trans('info.whatcausestext1') }}</p>
            <p class="paragraph-text">{{ trans('info.whatcausestext2') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('info.symptoms') }}</h2>
            <ul>
                <li class="paragraph-text">{{ trans('info.symptoms1') }}</li>
                <li class="paragraph-text">{{ trans('info.symptoms2') }}</li>
                <li class="paragraph-text">{{ trans('info.symptoms3') }}</li>
                <li class="paragraph-text">{{ trans('info.symptoms4') }}</li>
                <li class="paragraph-text">{{ trans('info.symptoms5') }}</li>
            </ul>

            <hr>

            <h2 class="paragraph-heading" id="riskfactors">{{ trans('info.riskfactors') }}</h2>
            <ul>
                <li class="paragraph-text">{{ trans('info.riskfactor1') }}</li>
                <li class="paragraph-text">{{ trans('info.riskfactor2') }}</li>
                <li class="paragraph-text">{{ trans('info.riskfactor3') }}</li>
                <li class="paragraph-text">{{ trans('info.riskfactor4') }}</li>
                <li class="paragraph-text">{{ trans('info.riskfactor5') }}</li>
                <li class="paragraph-text">{{ trans('info.riskfactor6') }}</li>
                <li class="paragraph-text">{{ trans('info.riskfactor7') }}</li>
                <li class="paragraph-text">{{ trans('info.riskfactor8') }}</li>
            </ul>

            <hr>

            <h2 class="paragraph-heading" id="treatment">{{ trans('info.treatment') }}</h2>
            <p class="paragraph-text">{{ trans('info.treatmenttext') }}</p>
            <p class="paragraph-text">{{ trans('info.treatmentoptions') }}</p>

            <ul>
                <li class="paragraph-text"><span class="paragraph-heading" style="font-size: 14px;">{{ trans('info.treatmentoption1') }}</span> {{trans('info.treatmentoption1_text')}}</li>
                <li class="paragraph-text"><span class="paragraph-heading" style="font-size: 14px;">{{ trans('info.treatmentoption2') }}</span> {{trans('info.treatmentoption2_text')}}</li>
                <li class="paragraph-text"><span class="paragraph-heading" style="font-size: 14px;">{{ trans('info.treatmentoption3') }}</span> {{trans('info.treatmentoption3_text')}}</li>
            </ul>

        </div>
    </div>

@stop