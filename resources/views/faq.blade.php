@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2 class="paragraph-heading">{{ trans('faq.doesithurt') }}</h2>
            <p class="paragraph-text">{{ trans('faq.doesithurttext') }}</p>

            <hr>

            <h2 class="paragraph-heading">{{ trans('faq.howlong') }}</h2>
            <p class="paragraph-text">{{ trans('faq.howlongtext') }}</p>

            <hr>

            <h2 class="paragraph-heading">{{ trans('faq.canwalk') }}</h2>
            <p class="paragraph-text">{{ trans('faq.canwalktext') }}</p>

            <hr>

            <h2 class="paragraph-heading">{{ trans('faq.canrepeat') }}</h2>
            <p class="paragraph-text">{{ trans('faq.canrepeattext') }}</p>

            <hr>

            <h2 class="paragraph-heading">{{ trans('faq.difference') }}</h2>
            <p class="paragraph-text">{{ trans('faq.differencetext') }}</p>

            <hr>

            <h2 class="paragraph-heading">{{ trans('faq.sideeffects') }}</h2>
            <p class="paragraph-text">{{ trans('faq.sideeffectstext') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('faq.precautions') }}</h2>
            <ul>
                <li class="paragraph-text">{{ trans('faq.precautions1') }}</li>
                <li class="paragraph-text">{{ trans('faq.precautions2') }}</li>
                <li class="paragraph-text">{{ trans('faq.precautions3') }}</li>
                <li class="paragraph-text">{{ trans('faq.precautions4') }}</li>
            </ul>

            <hr>

        </div>
    </div>

    <hr>

@stop