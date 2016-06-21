@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="paragraph-heading" id="whatis">{{ trans('viscoplus.whatisvp') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.whatistext1') }}</p>
            <p class="paragraph-text">{{ trans('viscoplus.whatistext2') }}</p>

            <hr>

            <div style="margin-top: -45px; margin-bottom: 40px;">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th><h2 class="paragraph-heading text-center">ViscoPlus One</h2></th>
                        <th><h2 class="paragraph-heading text-center">ViscoPlus Gel</h2></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="col-md-3">{{ trans('viscoplus.tableheading1') }}</th>
                        <td>3-5</td>
                        <td>1</td>
                    </tr>
                    <tr class="info">
                        <th class="col-md-3">{{ trans('viscoplus.tableheading2') }}</th>
                        <td>{{ trans('viscoplus.tablecontent2') }}</td>
                        <td>{{ trans('viscoplus.tablecontent2') }}</td>
                    </tr>
                    <tr>
                        <th class="col-md-3">{{ trans('viscoplus.tableheading3') }}</th>
                        <td>{{ trans('viscoplus.tablecontent3_1') }}</td>
                        <td>{{ trans('viscoplus.tablecontent3_2') }}</td>
                    </tr>
                    <tr class="info">
                        <th class="col-md-3">{{ trans('viscoplus.tableheading4') }}</th>
                        <td>{{ trans('viscoplus.tablecontent4_1') }}</td>
                        <td>{{ trans('viscoplus.tablecontent4_2') }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.whatisnahy') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.howworks') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.howworkstext') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.procedure') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.proceduretext') }}</p>

        </div>
    </div>


@stop