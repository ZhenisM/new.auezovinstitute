@extends('layouts.app')

@section('content')
<div>
    <div class="pnwes">
        <div class="dep__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
        <a href="{{ URL::to('scp') }}">{{ trans('header.science') }}</a>&nbsp;/&nbsp;
            {{ trans('content.grant_funding') }}
    </div>
        <div class="pnwes__page container">
            <div class="row">
            @foreach ($sciences as $science)
                    <div class="col-sm-12 col-md-4 mb-4">
                        <a href="{{ route('sciences.show', [ 'id' => $science->id ]) }}">
                            <div class="pnwes__page__block sciences">
                                <div class="pnwes__page__block__wrap">
                                    <div class="pnwes__page__block__title">
                                        <h4>{{ $science->title }}</h4>
                                        <p>{!! $science->description_short !!}</p>
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
