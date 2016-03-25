@extends('layout')

@section('content')
    <h1 class="paragraph-heading">
        {{ trans('info.whatis') }}
    </h1>
    <p class="paragraph-text">
        {{ trans('info.whatistext1') }} <br>
        {{ trans('info.whatistext2') }} <br>
        {{ trans('info.whatistext3') }} <br>
    </p>
@stop