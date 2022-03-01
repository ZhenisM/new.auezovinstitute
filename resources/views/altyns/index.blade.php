@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
			<a>{{ trans('content.altyns') }}</a>
		</div>
{{--		<div class="pnwes__state">--}}
{{--			<a href="#"><p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;{{ trans('content.all_news') }}</p></a>--}}
{{--		</div>--}}
        <div>
            @foreach($altyns as $altyn)
                @if ($altyn->id == 1)
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>{{trans('content.altyns')}}</h1>
                    </div>
                    <div class="news__state__img">
                        <img src="http://auezovinstitute.kz/uploads" alt="">
                    </div>
                    <div class="news__state__text">
                        {{$altyn->description}}
                    </div>
                    <div class="news__state__date">
                        <div class="pnew__state__date">
                            <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{$altyn->created_at}}&nbsp;&nbsp;</p>

                        </div>
                    </div>
                </div>
            </div>
                @endif
            @endforeach
        </div>
        <div class="books__page">
            @foreach ($books as $bok)
            <div class="books__show">
                <a class="" href="{{ route('books.show', [ 'id' => $bok->id ]) }}">
                    <img src="{{ $bok ? asset('uploads/' . $bok->image_show) : ""}}">
                    <p class="book__name">{{ $bok->title }}</p>
                    <p class="aphtor">{!! $bok->description_short !!}</p>
                </a>
            </div>
            @endforeach
        </div>
        <tfoot>
        <tr colspan="3">
            <ul class="pagination pull-right">
                {{$books->links()}}
            </ul>
        </tr>
        </tfoot>
{{--		<div class="pnwes__page">--}}
{{--			@foreach ($altyns as $altyn)--}}
{{--			<div class="pnwes__page__block">--}}
{{--				<div class="pnwes__page__block__wrap">--}}
{{--					<div class="pnwes__page__block__wrap__img">--}}
{{--						<a href="{{ route('altyns.show', [ 'id' => $altyn->id ]) }}"><img src="{{ $altyn ? asset('uploads/' . $altyn->image_show) : ""}}"></a>--}}
{{--					</div>--}}
{{--					<div class="pnwes__page__block__text">--}}
{{--						<p>{!! $altyn->description_short !!}</p>--}}
{{--						<a href="{{ route('altyns.show', [ 'id' => $altyn->id ]) }}">{{ trans('content.read_more') }}</a>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				<div class="pnew__state__date">--}}
{{--					<i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $altyn->created_at }}&nbsp;&nbsp;</p>--}}
{{--                    <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			@endforeach--}}

{{--                <div class="books__page">--}}
{{--                    @foreach ($books as $bok)--}}
{{--                        <div class="books__show">--}}
{{--                            <a class="" href="{{ route('books.show', [ 'id' => $bok->id ]) }}">--}}
{{--                                <img src="{{ $bok ? asset('uploads/' . $bok->image_show) : ""}}">--}}
{{--                                <p class="book__name">{{ $bok->title }}</p>--}}
{{--                                <p class="aphtor">{!! $bok->description_short !!}</p>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <tfoot>--}}
{{--                <tr colspan="3">--}}
{{--                    <ul class="pagination pull-right">--}}
{{--                        {{$books->links()}}--}}
{{--                    </ul>--}}
{{--                </tr>--}}
{{--                </tfoot>--}}
{{--		</div>--}}
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
