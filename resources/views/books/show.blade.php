@extends('layouts.app')

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            <a href="{{ URL::to('/books') }}">{{ trans('content.books') }}</a>&nbsp;/
            {{ $bok->title }}
        </div>
        <div>
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>{{ $bok->title }}</h1>
                    </div>
                    <div class="news__state__text news__books__text">
                        <div class="row">
                            <div class="news__books__img col-sm-12 col-md-2">
                                <img src="{{ $bok ? asset('uploads/' . $bok->image_show) : ""}}" alt="">
                            </div>
                            <div class="news__state__text__descr col-sm-12 col-md-8">
                                <div class="news__state__text__descr__aphtor">
                                    <p>{{ trans('content.author') }}</p><p>{!! $bok->description_short !!}</p>
                                </div>
                                @if($bok->pdf != 1)
                                <div class="news__state__reader">
                                    <a href="{{ route('reader.index', [ 'id' => $bok->id ]) }}" target="_blank">{{trans('content.book_read')}}</a>
                                </div>
                                @else
                                <div class="news__state__reader">
                                    <a href="../../uploads/{{ $bok->ebook_show }}" target="_blank">{{trans('content.book_read_pdf')}}</a>
                                </div>
                                @endif
                                @foreach ($qrcodes as $qrcode)
                                    @if($qrcode->name === $bok->title)
                                        <img src="data:image/png;base64, {!! $qrcode->qrcode !!} ">
                                    @endif
                                @endforeach
                                <div class="news__state__text__descr__items">
                                    @if(empty($bok->audio_show))
                                        <div class="audio-player" style="display: none">
                                            <div class="timeline">
                                                <div class="progress"></div>
                                            </div>
                                            <div class="controls">
                                                <div class="play-container">
                                                    <div class="toggle-play play">
                                                    </div>
                                                </div>
                                                <div class="time">
                                                    <div class="current">0:00</div>
                                                    <div class="divider">/</div>
                                                    <div class="length"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button">
                                                        <div class="volume icono-volumeMedium"></div>
                                                    </div>

                                                    <div class="volume-slider">
                                                        <div class="volume-percentage"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="audio-player">
                                            <div class="timeline">
                                                <div class="progress"></div>
                                            </div>
                                            <div class="controls">
                                                <div class="play-container">
                                                    <div class="toggle-play play">
                                                    </div>
                                                </div>
                                                <div class="time">
                                                    <div class="current">0:00</div>
                                                    <div class="divider">/</div>
                                                    <div class="length"></div>
                                                </div>
                                                <div class="volume-container">
                                                    <div class="volume-button">
                                                        <div class="volume icono-volumeMedium"></div>
                                                    </div>

                                                    <div class="volume-slider">
                                                        <div class="volume-percentage"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <p>{!! $bok->description !!}</p>
                                </div>
                                <h3>{{trans('content.comment')}}</h3>
                                <br />
                                @if (!empty($bok->audio))
                                Аудио
                                <iframe src="{!! $bok->audio !!}" style="overflow: auto;" width="100%" height="250" frameborder="1"></iframe>
                                @endif
                                <br />
                                @foreach($comments as $comment)
                                    <div class="card">
                                        <div class="card-header">
                                            <div style="float: left;">Comment from: {{$comment->user_name}}</div>
                                            <div style="float: right;">{{$comment->created_at}}</div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Email: {{$comment->email}}</h5>
                                            <p class="card-text">{{$comment->message}}</p>
                                        </div>
                                    </div>
                                    <br/>
                                @endforeach

                                <input type="submit" id="writeComment" onclick="switchBtn()" name="writeComment" class="btn btn-primary btn-round btn-sm" value="{{ trans('main.write_comment') }}" />
                                <div id="comment-cont">
                                    <div class="wrap__message">
                                        <div class="container__contacts">
                                            <div class="tittle">
                                                <div class="iconstyle">
    {{--                                                <span class="contact100-form-title" id="maptitle"><i class="fab fa-telegram-plane"></i>&nbsp;<p>{{ trans('main.write_to_us') }}</p></span>--}}
                                                    {{--            <div class="line2"></div>--}}
                                                </div>
                                                @include('comments')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                <div class="news__state__date">--}}
                    {{--                    <div class="pnew__state__date">--}}
                    {{--                        <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $bok->created_at }}&nbsp;&nbsp;</p>--}}
                    {{--                        <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </div>
    </div>

<script>
    const audioPlayer=document.querySelector(".audio-player");const audio=new Audio("{{ URL::to($bok ? asset('uploads/' . $bok->audio_show) : "") }}");console.dir(audio);audio.addEventListener("loadeddata",()=>{audioPlayer.querySelector(".time .length").textContent=getTimeCodeFromNum(audio.duration);audio.volume=.75},!1);const timeline=audioPlayer.querySelector(".timeline");timeline.addEventListener("click",e=>{const timelineWidth=window.getComputedStyle(timeline).width;const timeToSeek=e.offsetX/parseInt(timelineWidth)*audio.duration;audio.currentTime=timeToSeek},!1);const volumeSlider=audioPlayer.querySelector(".controls .volume-slider");volumeSlider.addEventListener('click',e=>{const sliderWidth=window.getComputedStyle(volumeSlider).width;const newVolume=e.offsetX/parseInt(sliderWidth);audio.volume=newVolume;audioPlayer.querySelector(".controls .volume-percentage").style.width=newVolume*100+'%'},!1)
    setInterval(()=>{const progressBar=audioPlayer.querySelector(".progress");progressBar.style.width=audio.currentTime/audio.duration*100+"%";audioPlayer.querySelector(".time .current").textContent=getTimeCodeFromNum(audio.currentTime)},500);const playBtn=audioPlayer.querySelector(".controls .toggle-play");playBtn.addEventListener("click",()=>{if(audio.paused){playBtn.classList.remove("play");playBtn.classList.add("pause");audio.play()}else{playBtn.classList.remove("pause");playBtn.classList.add("play");audio.pause()}},!1);audioPlayer.querySelector(".volume-button").addEventListener("click",()=>{const volumeEl=audioPlayer.querySelector(".volume-container .volume");audio.muted=!audio.muted;if(audio.muted){volumeEl.classList.remove("icono-volumeMedium");volumeEl.classList.add("icono-volumeMute")}else{volumeEl.classList.add("icono-volumeMedium");volumeEl.classList.remove("icono-volumeMute")}});function getTimeCodeFromNum(num){let seconds=parseInt(num);let minutes=parseInt(seconds/60);seconds-=minutes*60;const hours=parseInt(minutes/60);minutes-=hours*60;if(hours===0)return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;return `${String(hours).padStart(2, 0)}:${minutes}:${String(
        seconds % 60
    ).padStart(2, 0)}`}

    document.getElementById("comment-cont").style.display = 'none';

        function  switchBtn()
        {
            document.getElementById("comment-cont").style.display == 'none'? document.getElementById("comment-cont").style.display = '':document.getElementById("comment-cont").style.display = 'none';
        }

</script>
@endsection


