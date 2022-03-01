@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
            <br>
            <br>
			<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
			<a>{{ trans('content.notice') }}</a>
		</div>
		<div class="pnwes__state">
			<p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;{{ trans('content.notice') }}</p>
		</div>
		<div class="pnwes__page container">
            <div class="row">
			@foreach ($notices as $notice)
                <div class="col-sm-12 col-md-2">{{ Date::parse($notice->created_at)->format('j F Y г.') }}</div>
                <div class="col-sm-12 col-md-10">
                    <a class="news__link" href="{{ route('notice.show', [ 'id' => $notice->id ]) }}">
                                <div class="pnwes__page__state__text">
                                    <p>{!! $notice->title !!}</p>
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
