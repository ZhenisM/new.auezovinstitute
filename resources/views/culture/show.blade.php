@extends('layouts.app')

@section('content')
    <div class="culrure__wrap">
        <br/>
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            {{ $cultur->title }}
        </div>
        <div>
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>{{ $cultur->title }}</h1>
                    </div>
                    <div class="news__state__img">
                        <img src="{{ $cultur ? asset('uploads/' . $cultur->image_show) : ""}}" alt="">
                    </div>
                    <div class="books__page">
                        <br />
                        @if ($id <> 6)
                            @if ($books == null || count($books) == 0))<h3>No Books</h3> @endif
                            @foreach($books as $book)
                                @if ($book->book_section == $_GET['book_section'])
                                <div class="books__show">
                                    <a class="" href="{{ route('books.show', [ 'id' => $book->id ]) }}">
                                        <img src="{{ $book ? asset('uploads/' . $book->image_show) : ""}}">
                                        <p class="book__name">{{ $book->title }}</p>
                                        <p class="aphtor">{!! $book->description_short !!}</p>
                                    </a>
                                </div>
                                @endif
                            @endforeach
                            @else
                            {!! $cultur->description !!}
                        @endif
                    </div>
                    <div class="news__state__date">
                        <div class="pnew__state__date">
                            <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ Date::parse($cultur->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p>
                            <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
