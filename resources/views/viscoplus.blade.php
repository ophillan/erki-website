@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-lg-10 col-lg-offset-1">
            <h2 class="paragraph-heading" id="whatis">{{ trans('viscoplus.whatisvp') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.whatistext1') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.whatisnahy') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext1') }}</p>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext2') }}</p>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext3') }}</p>

            <hr>

            <div class="row">
                <div class="col-xs-6">
                    <h2 class="paragraph-heading text-center">ViscoPlus One</h2>
                </div>
                <div class="col-xs-6">
                    <h2 class="paragraph-heading text-center">ViscoPlus Gel</h2>
                </div>
            </div>
        </div>
    </div>


@stop