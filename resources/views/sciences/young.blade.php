<!-- @extends('layouts.app') -->

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            <a href="{{ URL::to('scp') }}">{{ trans('header.science') }}</a>&nbsp;/
            <a href="{{ URL::to('/sciences') }}">{{ trans('content.grant_funding') }}</a>&nbsp;/
        </div>
        <div>
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>Young council</h1>
                    </div>
                    <div class="news__state__img">

                    </div>
                    <div class="news__state__text">
                        Young council
                    </div>
                    <div class="news__state__date">
                        <div class="pnew__state__date">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
