@extends('layouts.app')

@section('content')
           <?/*?>@include('layouts.banner')<?*/?>
    <div class="wrap-banner">
        <div class="banner-block">
            <div class="banner-block-sliders">
                <div class="banner-block-sliders-one">
                    <div class="kai_banner_container clearfix hidden-xs">
                        <div class="kai_banner_body clearfix">
                            @foreach ($banners as $banner)
                                <a style="pointer-events: none;"><img src="{{ $banner ? asset('uploads/' . $banner->image_show) : ""}}"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="banner-block-sliders-two">
                    <div class="kai_banner_container clearfix hidden-xs">
                        <div class="kai_banner_body clearfix">
                            <a style="pointer-events: none;"><img src="../../images/banner/banner.png"></a>
                            <a style="pointer-events: none;"><img src="../../images/banner/banner2.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-block-title">
                ИНСТИТУТТЫҢ МИССИЯСЫ ЖӘНЕ БАСЫМ БАҒЫТТАРЫ
            </div>
            <div class="banner-block-info">
                <div class="banner-block-info-text">
                    Институттың миссиясы – әдебиеттану және
                    өнертану саласындағы ғылыми-зерттеу және
                    инновациялық жобаларды жүзеге асыру және
                    зияткерлік элитаны даярлау арқылы қоғамның
                    рухани құндылықтарын жетілдіру және тұрақты
                    дамуына үлес қосу болып табылады.
                </div>
                <div class="banner-block-info-img">
                    <img src="../../images/banner/banner-info.png">
                </div>
            </div>
        </div>
    </div>
    <div class="wrap__news">
        <div class="nwes">
            <div class="nwes__state">
                <ul>
                    <a href="{{ URL::to('/news') }}"><p><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;{{ trans('main.news') }}</p></a>
                </ul>
                <div class="line"></div>
            </div>
            <div class="nwes__blog">
                <div class="nwes__blog__mini">
                    <div class="nwes-blog-cards">
                    @if ($news)
                        <?php $first = 1; ?>
                        @foreach ($news as $newsValue)
                            @if($first == 1)
                                <div class="nwes-blog-cards-item nwes-blog-cards-item-left">
                                    <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}" class="new__mini-wrap">
                                        <div class="new__mini">
                                            <div class="new__mini__img">
                                                <img src="{{ $newsValue ? asset('uploads/' . $newsValue->image_show) : ''}}">
                                            </div>
                                            <div class="new__mini-blog">
                                                <div class="new__state">
                                                    {{--                                        <div class="new__state__text">--}}
                                                    {{--                                            <p>{{ $newsValue->title }}</p>--}}
                                                    {{--                                        </div>--}}
                                                    <div class="new__state__text">
                                                        <h4>{{$newsValue->title}}</h4>
                                                        <p>{!! $newsValue->description_short !!}</p>
                                                        {{--                                            <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}">Читать дальше</a>--}}
                                                    </div>
                                                </div>
                                                <div class="new__state__date">
                                                    <div class="new__state__date__wrap"><i class="far fa-calendar-check"></i><p>&nbsp;&nbsp;{{ Date::parse($newsValue->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p></div>
                                                    {{--                                            <div class="new__state__date__wrap"><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p></div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nwes-blog-cards-item nwes-blog-cards-item-right padding-none news-mini-column">
                            <?php $first = 0; ?>
                            @else
                                    <div class="nwes-blog-cards-item-wrap">
                                        <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}" class="new__mini-wrap">
                                            <div class="new__mini-right">
                                                <div class="new__mini__img">
                                                    <img src="{{ $newsValue ? asset('uploads/' . $newsValue->image_show) : ''}}">
                                                </div>
                                                <div class="new__mini-blog">
                                                    <div class="new__state">
                                                        {{--                                        <div class="new__state__text">--}}
                                                        {{--                                            <p>{{ $newsValue->title }}</p>--}}
                                                        {{--                                        </div>--}}
                                                        <div class="new__state__text">
                                                            <h4>{{$newsValue->title}}</h4>
                                                            <p>{!! $newsValue->description_short !!}</p>
                                                            {{--                                            <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}">Читать дальше</a>--}}
                                                        </div>
                                                    </div>
                                                    <div class="new__state__date">
                                                        <div class="new__state__date__wrap"><i class="far fa-calendar-check"></i><p>&nbsp;&nbsp;{{ Date::parse($newsValue->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p></div>
                                                        {{--                                            <div class="new__state__date__wrap"><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p></div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            @endif
                        @endforeach
                                </div>
                    @endif
                    </div>
                </div>
            </div>
            <div class="news__archive">
                <a href="{{ URL::to('/news') }}" class="news__archive__state">{{ trans('main.archive') }}</a>
            </div>
        </div>
    </div>
    <div class="wrap-altyn-kor">
        <div class="altyn-kor">
            <div class="altyn-kor-haed">
                <a href="https://mediakit.kz"><i class="fas fa-book-open"></i><p>&nbsp;&nbsp;{{ trans('main.altyn-kor') }}</p></a>
                <div class="line"></div>
            </div>
            <div class="altyn-kor-info">
                <div class="altyn-kor-info-item">
                    <div class="altyn-kor-info-item-img">
                        <img src="../../images/main/kniga_icon.png">
                    </div>
                    <div class="altyn-kor-info-item-title">{{ trans('altyn-kor.book_title') }}</div>
                    <div class="altyn-kor-info-item-text">{{ trans('altyn-kor.book_text') }}</div>
                </div>
                <div class="altyn-kor-info-item">
                    <div class="altyn-kor-info-item-img">
                        <img src="../../images/main/pero.png">
                    </div>
                    <div class="altyn-kor-info-item-title">{{ trans('altyn-kor.pero_title') }}</div>
                    <div class="altyn-kor-info-item-text">{{ trans('altyn-kor.pero_text') }}</div>
                </div>
                <div class="altyn-kor-info-item">
                    <div class="altyn-kor-info-item-img">
                        <img src="../../images/main/video.png">
                    </div>
                    <div class="altyn-kor-info-item-title">{{ trans('altyn-kor.video_title') }}</div>
                    <div class="altyn-kor-info-item-text">{{ trans('altyn-kor.video_text') }}</div>
                </div>
            </div>
            <div class="altyn-kor-content">
                <div class="altyn-kor-content-info-wrap">
                    <div class="altyn-kor-content-info">
                        <div class="altyn-kor-content-info-title">{{ trans('altyn-kor.title') }}</div>
                        <div class="altyn-kor-content-info-text">{{ trans('altyn-kor.text') }}</div>
                    </div>
                </div>
                <div class="altyn-kor-content-news">
                    <div class="altyn-kor-content-news-item">
                        <div class="altyn-kor-content-news-item-img">
                            <img src="../../images/main/altunkor.png">
                        </div>
                        <div class="altyn-kor-content-news-item-title">{{ trans('altyn-kor.news_1_title') }}</div>
                        <div class="altyn-kor-content-news-item-text">{{ trans('altyn-kor.news_1_text') }}</div>
                    </div>
                    <div class="altyn-kor-content-news-item">
                        <div class="altyn-kor-content-news-item-img">
                            <img src="../../images/main/q3a.jpg">
                        </div>
                        <div class="altyn-kor-content-news-item-title">{{ trans('altyn-kor.news_2_title') }}</div>
                        <div class="altyn-kor-content-news-item-text">{{ trans('altyn-kor.news_2_text') }}</div>
                    </div>
                    <div class="altyn-kor-content-news-item">
                        <div class="altyn-kor-content-news-item-img">
                            <img src="../../images/main/eski.png">
                        </div>
                        <div class="altyn-kor-content-news-item-title">{{ trans('altyn-kor.news_3_title') }}</div>
                        <div class="altyn-kor-content-news-item-text">{{ trans('altyn-kor.news_3_text') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-education">
        <div class="education">
            <div class="education__haed">
                <a href="{{ URL::to('/main/education') }}"><i class="fas fa-university"></i><p>&nbsp;&nbsp;{{ trans('main.education') }}</p></a>
                <div class="line"></div>
            </div>
            <div class="education__text">
                <p>Мы предлагаем вам уникальную возможность получить академическую степень, сочетающую в себе научные традиции и современные стандарты образования, по специальностям Магистратуры и Докторантуры PhD:</p>
            </div>
            <div class="education__icons">
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group1.png">
                    </div>
                    <div class="etext">
                        <p>Современная литература Казахстана</p>
                        <p>6M021401</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group5.png">
                    </div>
                    <div class="etext">
                        <p>Теория и литературная критика</p>
                        <p>6D021401</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group3.png">
                    </div>
                    <div class="etext">
                        <p>Текстология</p>
                        <p>6M021402</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group4.png">
                    </div>
                    <div class="etext">
                        <p>Казахский фольклор и древняя литература</p>
                        <p>6D021402</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group5.png">
                    </div>
                    <div class="etext">
                        <p>Фольклористика</p>
                        <p>6M021403</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group6.png">
                    </div>
                    <div class="etext">
                        <p>Литературоведение</p>
                        <p>6D021403</p>
                    </div>
                </div>
            </div>
            <div class="education__button">
                <a href="{{ URL::to('/main/education') }}" class="education__button__link">{{ trans('main.read_more') }}</a>
            </div>
        </div>
    </div>
    <div class="wrap__books">
        <div class="books">
            <div class="books__haed">
                <a href="{{ URL::to('/books') }}"> <i class="fas fa-book"></i><p>&nbsp;&nbsp;{{ trans('main.books_institute') }}</p></a>
               <div class="line"></div>
            </div>
            @include('main.partials.bookSlider')
            <div class="books__button">
                <a href="{{ URL::to('/books') }}" class="books__button__link">{{ trans('main.all_books') }}</a>
            </div>
        </div>
    </div>
    @include('main.partials.map')
    <style>
        .logo__footer-mod {
            margin-top: -52px;
        }
    </style>
<script type="text/javascript">
$('.kai_banner_container').kaiBanner({
    intervalTime:5000,
    highlightClass:'highlight'
});
</script>
@endsection

