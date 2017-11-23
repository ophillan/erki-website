@extends('layouts.layout')

@section('title', trans('faq.title'))

@section('content')

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2 id="doesithurt">{{ trans('faq.doesithurt') }}</h2>
            <p>{{ trans('faq.doesithurttext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

            <h2 id="duration">{{ trans('faq.howlong') }}</h2>
            <p>{{ trans('faq.howlongtext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2 id="canwalk">{{ trans('faq.canwalk') }}</h2>
            <p>{{ trans('faq.canwalktext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2 id="canrepeat">{{ trans('faq.canrepeat') }}</h2>
            <p>{{ trans('faq.canrepeattext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2 id="differences">{{ trans('faq.difference') }}</h2>
            <p>{{ trans('faq.differencetext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2 id="sideeffects">{{ trans('faq.sideeffects') }}</h2>
            <p>{{ trans('faq.sideeffectstext') }}</p>
        </div>
    </div>

    <div class="row" id="contentrow">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <h2 id="precautions">{{ trans('faq.precautions') }}</h2>
            <ul>
                <li>{{ trans('faq.precautions1') }}</li>
                <li>{{ trans('faq.precautions2') }}</li>
                <li>{{ trans('faq.precautions3') }}</li>
                <li>{{ trans('faq.precautions4') }}</li>
            </ul>
        </div>
    </div>

@stop