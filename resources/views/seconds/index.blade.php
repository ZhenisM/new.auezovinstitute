@extends('layouts.app')

@section('content')
<div>
    <div class="pnwes">
        <div class="dep__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
        <a href="{{ URL::to('scp') }}">{{ trans('header.science') }}</a>&nbsp;/&nbsp;
            {{ trans('content.financing_program') }}
    </div>
        <div class="pnwes__page container">
            <div class="row">
            @foreach ($seconds as $second)
                <div class="col-sm-12 col-md-4 mb-5">
                    <a href="{{ route('seconds.show', [ 'id' => $second->id ]) }}">
                        <div class="pnwes__page__block seconds">
                            <div class="pnwes__page__block__wrap">
                                <div class="pnwes__page__block__title">
                                    <h4>{{ $second->title }}</h4>
                                    <p>{!! $second->description_short !!}</p>
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
