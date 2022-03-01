<?php
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
?>
@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
			<a>{{ trans('content.education') }}</a>
		</div>
		<div class="pnwes__state">
			<a href="#">
                <p>
                    @if(LaravelLocalization::getCurrentLocale() == 'kk')
                        Білім және ғылым интеграциясы
                    @endif
                    @if(LaravelLocalization::getCurrentLocale() == 'ru')
                        Интеграция образования и науки
                    @endif
                    @if(LaravelLocalization::getCurrentLocale() == 'en')
                        Integration of Education and Science
                    @endif

                </p>
            </a>
		</div>
        <div class="pnwes__page">
            @if(LaravelLocalization::getCurrentLocale() == 'kk')
                Ғылым және білім интеграциясы жобасы РМК «Ғылым ордасы» базасында орналасқан ҚР БҒМ Ғылым комитетінің Ғылыми зерттеу институттары мен әл-Фараби атындағы ҚазҰУ-дің магистранттар мен PhD докторанттарды дайындау бойынша бірлескен оқу бағдарламасы болып табылады. Бағдарлама 2014 жылы ҚР Білім және ғылым экс-министрі А.Б. Сарінжіповтің бастамасымен құрылды.
                Жобалық офистің алғашқы директоры әлеумет. ғ.д., профессор, ҚР ҰҒА корреспондент мүшесі  - З.К. Шәукенова (2014-2016)<br/>
                2016 жылдан бағдарлама жетекшісі э.ғ.д., профессор, ҚР ҰҒА академигі, әл-Фараби атындағы ҚазҰУ-нің ғылым және білім интеграциясы бойынша проректоры - Сатыбалдин Әзімхан Әбілқайырұлы.
            @endif
            @if(LaravelLocalization::getCurrentLocale() == 'ru')
                "Интеграция образования и науки" является совместной программой научно-исследовательских институтов Комитета науки МОН РК, расположенные на базе РГП "Ғылым Ордасы" и КазНУ имени аль-Фараби по подготовке научных кадров по магистратуре и PhD докторантуре. Программа была запущена в 2014 году экс министром образования и науки РК А.Б. Саринжиповым.
                Первым директором проектного офиса была д.соц.н., профессор, член-корр. НАН РК - Шаукенова З.К.  (2014-2016).<br/>
                С 2016 года программой руководит д.э.н., профессор, академик НАН РК, проректор по интеграции науки и образования КазНУ им. аль-Фараби - Сатыбалдин Азимхан Абилхайырович
            @endif

            @if(LaravelLocalization::getCurrentLocale() == 'en')
                "Integration of Education and Science" is a joint program of research institutes of the Science Committee of the MES RK, located on the basis of the RSE "Gylym Ordasy" and al-Farabi KazNU for the preparation of scientific personnel for masters and PhD doctoral programs. The program was launched in 2014 by the ex-Minister of Education and Science of the Republic of Kazakhstan, A.B. Sarinzhipov.
                The first director of the project office was Doctor of Social Sciences, Professor, Corresponding Member of NAS RK -  Z.K.Shaukenova (2014-2016).<br/>
                Since 2016, the program has been led by Doctor of Economics, Professor, Academician of the NAS RK, Vice-Rector for the Integration of Science and Education of al-Farabi KazNU - Satybaldin Azimkhan Abilkhaiyruly
            @endif

        </div>

{{--		<div class="pnwes__page">--}}
{{--			@foreach ($halyks as $halyk)--}}
{{--			<div class="pnwes__page__block">--}}
{{--				<div class="pnwes__page__block__wrap">--}}
{{--					<div class="pnwes__page__block__wrap__img">--}}
{{--						<a href="{{ route('halyks.show', [ 'id' => $halyk->id ]) }}"><img src="{{ $halyk ? asset('uploads/' . $halyk->image_show) : ""}}"></a>--}}
{{--					</div>--}}
{{--					<div class="pnwes__page__block__text">--}}
{{--						<p>{!! $halyk->description_short !!}</p>--}}
{{--						<a href="{{ route('halyks.show', [ 'id' => $halyk->id ]) }}">{{ trans('content.read_more') }}</a>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				<div class="pnew__state__date">--}}
{{--					<i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ Date::parse($halyk->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p>--}}
{{--                    <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			@endforeach--}}
{{--                <tfoot>--}}
{{--                <tr colspan="3">--}}
{{--                    <ul class="pagination pull-right">--}}
{{--                        {{$halyks->links()}}--}}
{{--                    </ul>--}}
{{--                </tr>--}}
{{--                </tfoot>--}}
{{--		</div>--}}
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
