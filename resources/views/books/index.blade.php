@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
			<a>{{ trans('content.books') }}</a>
		</div>
		<div class="pnwes__state">
			<p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;{{ trans('content.all_books') }}</p>
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
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
