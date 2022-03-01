@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
			<a>{{ trans('content.news') }}</a>
		</div>
		<div class="pnwes__state">
			<a href="#"><p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;{{ trans('content.all_news') }}</p></a>
		</div>
		<div class="pnwes__page">
			@foreach ($keruens as $keruen)
			<div class="pnwes__page__block">
				<div class="pnwes__page__block__wrap">
					<div class="pnwes__page__block__wrap__img">
						<a href="{{ route('keruens.show', [ 'id' => $keruen->id ]) }}"><img src="{{ $keruen ? asset('uploads/' . $keruen->image_show) : ""}}"></a>
					</div>
					<div class="pnwes__page__block__text">
						<p>{!! $keruen->description_short !!}</p>
						<a href="{{ route('keruens.show', [ 'id' => $keruen->id ]) }}">{{ trans('content.read_more') }}</a>
					</div>
				</div>
				<div class="pnew__state__date">
					<i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ Date::parse($keruen->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p>
{{--                    <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
				</div>
			</div>
			@endforeach
                <tfoot>
                <tr colspan="3">
                    <ul class="pagination pull-right">
                        {{$keruens->links()}}
                    </ul>
                </tr>
                </tfoot>
		</div>
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
