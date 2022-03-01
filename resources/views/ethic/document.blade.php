@extends('layouts.app')

@section('content')
    <div class="culrure__wrap">
        <br>
        <br>
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            <a href="{{ URL::to('/ethic') }}">{{ trans('content.ethic') }}</a>&nbsp;/
            {{ $ethic->title }}
        </div>
        <div>
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>{{ $ethic->title }}</h1>
                    </div>
                    <div class="news__state__text">
                        <?php
                        echo nl2br( $ethic->text );
                        ?>
                    </div>
                    <div class="news__state__date">
                        <div class="pnew__state__date">
                            <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ Date::parse($ethic->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p>
                            {{--                        <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
