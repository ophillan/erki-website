@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="paragraph-heading" id="whatis">{{ trans('viscoplus.whatisvp') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.whatistext1') }}</p>
            <p class="paragraph-text">{{ trans('viscoplus.whatistext2') }}</p>

            <hr>

            <div style="margin-top: -45px; margin-bottom: 40px;">
                <div class="col-xs-6">
                    <h2 class="paragraph-heading text-center">ViscoPlus One</h2>
                </div>
                <div class="col-xs-6">
                    <h2 class="paragraph-heading text-center">ViscoPlus Gel</h2>
                </div>
                <table class="table">
                    <tbody>
                    <tr>
                        <th class="col-md-3">Süstide arv</th>
                        <td>3-5</td>
                        <td>1-2</td>
                    </tr>
                    <tr class="info">
                        <th class="col-md-3">Mõju kestvus</th>
                        <td>6 kuud</td>
                        <td>6 kuud</td>
                    </tr>
                    <tr>
                        <th class="col-md-3">Sisaldus</th>
                        <td>Hüalaroonhappe konts. väiksem</td>
                        <td>Hüalaroonhappe konts. suurem</td>
                    </tr>
                    <tr class="info">
                        <th class="col-md-3">Kasutuspiirkond</th>
                        <td>Kõik liigesed</td>
                        <td>Põlve- ja puusaliiges</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.whatisnahy') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext1') }}</p>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext2') }}</p>
            <p class="paragraph-text">{{ trans('viscoplus.whatisnahytext3') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.howworks') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.howworkstext1') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.procedure') }}</h2>
            <p class="paragraph-text">{{ trans('viscoplus.proceduretext1') }}</p>

            <hr>

            <h2 class="paragraph-heading" id="symptoms">{{ trans('viscoplus.productmanual') }}</h2>

        </div>
    </div>


@stop