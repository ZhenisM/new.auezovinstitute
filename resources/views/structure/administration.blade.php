@extends('layouts.app')

@section('content')
  	<div>
		<div class="structur">
			<div class="structur__way">
				<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
				<a>{{ trans('header.leadership') }}</a>
			</div>
			<div class="structur__state">
				<p><i class="fas fa-users"></i>&nbsp;&nbsp;{{ trans('content.administration') }}</p>
			</div>


            <div class="structur__admins__wrap">
                <div class="row">
                        <div class="structur-admins col-sm-12 col-md-4">
                            <a class="admins__link" href="{{ route('structure.show', [ 'id' => $directors[0]->id ]) }}">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ $directors ? asset('uploads/' . $directors[0]->image_show) : ""}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>{{ $directors[0]->title }}</p>
                                                <p class="aphtor">{!! $directors[0]->description_short !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="structur-admins col-sm-12 col-md-4">
                            <a class="admins__link" href="{{ route('structure.show', [ 'id' => $directors[1]->id ]) }}">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ $directors ? asset('uploads/' . $directors[1]->image_show) : ""}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>{{ $directors[1]->title }}</p>
                                                <p class="aphtor">{!! $directors[1]->description_short !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="structur-admins col-sm-12 col-md-4">
                            <a class="admins__link" href="{{ route('structure.show', [ 'id' => $directors[2]->id ]) }}">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ $directors ? asset('uploads/' . $directors[2]->image_show) : ""}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>{{ $directors[2]->title }}</p>
                                                <p class="aphtor">{!! $directors[2]->description_short !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>




{{--            <div class="structur__admins__wrap">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4 mb-3">--}}
{{--                            <a class="admins__link" href="{{ route('structure.show', [ 'id' => $directors[0]->id ]) }}">--}}
{{--                            <div class="structur__admins">--}}
{{--                                <div class="structur__admins__men">--}}
{{--                                    <div class="structur__admins__men__photo">--}}
{{--                                        <img src="{{ $directors ? asset('uploads/' . $directors[0]->image_show) : ""}}">--}}
{{--                                    </div>--}}
{{--                                    <div class="structur__admins__men__name">--}}
{{--                                        <div class="structur__admins__men__name__text">--}}
{{--                                            <p>{{ $directors[0]->title }}</p>--}}
{{--                                            <p class="aphtor">{!! $directors[0]->description_short !!}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12 col-md-6 col-lg-4 offset-lg-1 mt-3">--}}
{{--                            <a class="admins__link" href="{{ route('structure.show', [ 'id' => $directors[1]->id ]) }}">--}}
{{--                                <div class="structur__admins">--}}
{{--                                    <div class="structur__admins__men">--}}
{{--                                        <div class="structur__admins__men__photo">--}}
{{--                                            <img src="{{ $directors ? asset('uploads/' . $directors[1]->image_show) : ""}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="structur__admins__men__name">--}}
{{--                                            <div class="structur__admins__men__name__text">--}}
{{--                                                <p>{{ $directors[1]->title }}</p>--}}
{{--                                                <p class="aphtor">{!! $directors[1]->description_short !!}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-md-6 col-lg-4 offset-lg-2 mt-3">--}}
{{--                            <a class="admins__link" href="{{ route('structure.show', [ 'id' => $directors[2]->id ]) }}">--}}
{{--                                <div class="structur__admins">--}}
{{--                                    <div class="structur__admins__men">--}}
{{--                                        <div class="structur__admins__men__photo">--}}
{{--                                            <img src="{{ $directors ? asset('uploads/' . $directors[2]->image_show) : ""}}">--}}
{{--                                        </div>--}}
{{--                                        <div class="structur__admins__men__name">--}}
{{--                                            <div class="structur__admins__men__name__text">--}}
{{--                                                <p>{{ $directors[2]->title }}</p>--}}
{{--                                                <p class="aphtor">{!! $directors[2]->description_short !!}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @foreach ($directors as $director)--}}
{{--                    <   a class="admins__link" href="{{ route('structure.show', [ 'id' => $director->id ]) }}">--}}
{{--                        <div class="structur__admins">--}}
{{--                            <div class="structur__admins__men">--}}
{{--                                <div class="structur__admins__men__photo">--}}
{{--                                    <a class="admins__link" href="{{ route('structure.show', [ 'id' => $director->id ]) }}">--}}
{{--                                        --}}
{{--                                    </a>--}}
{{--                                    <img src="{{ $director ? asset('uploads/' . $director->image_show) : ""}}">--}}
{{--                                </div>--}}
{{--                                <div class="structur__admins__men__name">--}}
{{--                                    <div class="structur__admins__men__name__text">--}}
{{--                                        <p>{{ $director->title }}</p>--}}
{{--                                        <p class="aphtor">{!! $director->description_short !!}</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="structur__admins__men__name__button">--}}
{{--                                        <i class="fas fa-book-reader"></i>&nbsp;&nbsp;{{ trans('content.to_learn_more') }}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
            </div>
    	</div>
    </div>
@endsection
