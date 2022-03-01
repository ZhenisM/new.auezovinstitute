@extends('layouts.app')

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            {{ $halyk->title }}
        </div>
        <?php
        echo nl2br($halyk->description);
        ?>
    </div>

@endsection
