@extends('layouts.app')

@section('content')
    <div>
        <div class="pnwes">
            <div class="pnwes__way">
                <br>
                <br>
                <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
                <a>{{ trans('content.ethic') }}</a>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($ethics as $ethic)
                        <div class="col-sm-12 col-md-2">{{ Date::parse($ethic->created_at)->format('j F Y г.') }}</div>
                        <div class="col-sm-12 col-md-10">
                            <a class="news__link" href="{{ route('ethic.document', [ 'id' => $ethic->id ]) }}">
                                <div class="pnwes__page__state__text">
                                    <p>{!! $ethic->title !!}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
