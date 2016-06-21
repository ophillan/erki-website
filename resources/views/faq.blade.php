@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2>{{ trans('faq.doesithurt') }}</h2>
            <p>{{ trans('faq.doesithurttext') }}</p>

            <hr>

            <h2>{{ trans('faq.howlong') }}</h2>
            <p>{{ trans('faq.howlongtext') }}</p>

            <hr>

            <h2>{{ trans('faq.canwalk') }}</h2>
            <p>{{ trans('faq.canwalktext') }}</p>

            <hr>

            <h2>{{ trans('faq.canrepeat') }}</h2>
            <p>{{ trans('faq.canrepeattext') }}</p>

            <hr>

            <h2>{{ trans('faq.difference') }}</h2>
            <p>{{ trans('faq.differencetext') }}</p>

            <hr>

            <h2>{{ trans('faq.sideeffects') }}</h2>
            <p>{{ trans('faq.sideeffectstext') }}</p>

            <hr>

            <h2 id="symptoms">{{ trans('faq.precautions') }}</h2>
            <ul>
                <li>{{ trans('faq.precautions1') }}</li>
                <li>{{ trans('faq.precautions2') }}</li>
                <li>{{ trans('faq.precautions3') }}</li>
                <li>{{ trans('faq.precautions4') }}</li>
            </ul>

        </div>
    </div>

@stop