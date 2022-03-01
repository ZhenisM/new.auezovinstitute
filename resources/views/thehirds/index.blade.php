@extends('layouts.app')

@section('content')
<div>
    <div class="pnwes">
        <div class="dep__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
        <a href="{{ URL::to('scp') }}">{{ trans('header.science') }}</a>&nbsp;/&nbsp;
            {{ trans('content.state_tasks') }}
    </div>
        <div class="pnwes__page container">
            <div class="row">
            @foreach ($thehirds as $thehird)
                <div class="col-sm-12 col-md-4 mb-5">
                    <a href="{{ route('thehirds.show', [ 'id' => $thehird->id ]) }}">
                        <div class="pnwes__page__block thehirds">
                            <div class="pnwes__page__block__wrap">
                                <div class="pnwes__page__block__title">
                                    <h4>{{ $thehird->title }}</h4>
                                    <p>{!! $thehird->description_short !!}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
