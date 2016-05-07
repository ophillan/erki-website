@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="paragraph-heading" id="whatis">{{ trans('viscoplus.whatisvp') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.whatistext1') }}</p>

            <div class="row">
                <div class="col-xs-6">
                    <h2 class="paragraph-heading text-center">ViscoPlus One</h2>
                </div>
                <div class="col-xs-6">
                    <h2 class="paragraph-heading text-center">ViscoPlus Gel</h2>
                </div>
            </div>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.whatisnahy') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext1') }}</p>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext2') }}</p>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext3') }}</p>

            <hr>

        </div>
    </div>


@stop