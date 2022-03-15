<!-- @extends('layouts.app') -->

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            <a href="{{ URL::to('scp') }}">{{ trans('header.science') }}</a>&nbsp;/
            <a href="{{ URL::to('/sciences') }}">{{ trans('content.grant_funding') }}</a>&nbsp;/
        </div>
        <div>
            @if (LaravelLocalization::getCurrentLocale() == "kk")
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>Институт ғылыми кеңесі</h1>
                    </div>
                    <div class="news__state__img">

                    </div>
                    <div class="news__state__text">
                        Алқалық басшылық орган  -  ғылыми кеңес болып табылады, оның құрамына директор, орынбасарлары, ғылыми жобалар мен бағдарламалардың басшылары кіреді. Ғылыми кеңестің құрамын директор бекітеді.
                        Ғылыми Кеңестің құзыретіне институт қызметінің негізгі бағыттарын, ғылыми - зерттеу және эксперименттік жұмыстардың перспективалық және жылдық жоспарларын, басшылардың жоспарлары мен есептерін, институт қызметінің басқа да мәселелерін қарау және бекіту кіреді.
                        Егер отырысқа оның кемінде 2/3 мүшесі қатысса, ғылыми кеңес шешім қабылдауға құқылы.
                        Ғылыми кеңестің шешімі Ғылыми кеңестің қатысып отырған мүшелерінің көпшілік дауысымен ашық дауыс беру арқылы қабылданады.
                        Жекелеген мәселелер бойынша шешім жасырын дауыс беру арқылы қабылдануы мүмкін.
                        Директор Ғылыми кеңестің шешімімен келіспеген жағдайда мәселе мемлекеттік басқару органының қарауына беріледі.<br/>
                        <br>
                        <div style="text-align: center;"><h3>Ғылыми кеңес мүшелері</h3></div>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/Matyzhanov.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>МАТЫЖАНОВ Кенжехан Ісләмжанұлы (төраға)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                    <div class="structur__admins">
                                        <div class="structur__admins__men">
                                            <div class="structur__admins__men__photo">
                                                <img src="{{ asset('images/stuff/Almira.jpg')}}">
                                            </div>
                                            <div class="structur__admins__men__name">
                                                <div class="structur__admins__men__name__text">
                                                    <p>ҚАЛИЕВА Альмира Қайыртайқызы (төраға орынбасары)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>




                            <div class="col-sm-12 col-md-4 mt-5">
                                    <div class="structur__admins">
                                        <div class="structur__admins__men">
                                            <div class="structur__admins__men__photo">
                                                <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                            </div>
                                            <div class="structur__admins__men__name">
                                                <div class="structur__admins__men__name__text">
                                                    <p>АКЫШ Нұрдәулет Бабиханұлы</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>АНАНЬЕВА Светлана Викторовна</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ӘЗІБАЕВА Бақытжан Уәлиқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ЕЛЕУКЕНОВ Шериаздан Рүстемұлы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/IsimaqovaAigul.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ІСІМАҚОВА Айгүл Серікқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/KenzhequlovaAinur.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>КЕНЖЕҚҰЛОВА Айнұр Берікқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/QaztuganovaAinur.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ҚАЗТУҒАНОВА Айнұр Жасанбергенқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ҚАЛИЖАНОВ Уәлихан Қалижанұлы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ҚИРАБАЕВ Серік Смайылұлы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/QonayevDiyar.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ҚОНАЕВ Диар Асқарұлы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ҚОРАБАЙ Серікқазы Сыбанбайұлы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/QydyrTorali.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ҚЫДЫР Төрәлі Еділбайұлы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/MuqanAmangeldi.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>МҰҚАН Амангелді Оразбайұлы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/OrdaGulzhahan.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ОРДА Гүлжаһан Жұмабердіқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/PiraliGulziya.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ПІРӘЛІ Гүлзия Жайлауқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/RaqyshZhumashai.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>РАҚЫШ Жұмашай Сайлауқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/Yertai.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>СУЛТАН Ертай</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('images/stuff/SaulembekGulmira.jpg')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>СӘУЛЕМБЕК Гүлмира Рзаханқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ШАРИПОВА Диляра Сапарғалиқызы</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5 mb-5">
                                <div class="structur__admins">
                                    <div class="structur__admins__men">
                                        <div class="structur__admins__men__photo">
                                            <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                        </div>
                                        <div class="structur__admins__men__name">
                                            <div class="structur__admins__men__name__text">
                                                <p>ХАМРАЕВ Алимжан Тиликович</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <ul>--}}
{{--                            <li>1.	МАТЫЖАНОВ Кенжехан Ісләмжанұлы (төраға) </li>--}}
{{--                            <li>2.	ҚАЛИЕВА Альмира Қайыртайқызы (төраға орынбасары) </li>--}}
{{--                            <li>3.	АКЫШ Нұрдәулет Бабиханұлы</li>--}}
{{--                            <li>4.	АНАНЬЕВА Светлана Викторовна </li>--}}
{{--                            <li>5.	ӘЗІБАЕВА Бақытжан Уәлиқызы</li>--}}
{{--                            <li>6.	ЕЛЕУКЕНОВ Шериаздан Рүстемұлы</li>--}}
{{--                            <li>7.	ІСІМАҚОВА Айгүл Серікқызы </li>--}}
{{--                            <li>8.	КЕНЖЕҚҰЛОВА Айнұр Берікқызы </li>--}}
{{--                            <li>9.	ҚАЗТУҒАНОВА Айнұр Жасанбергенқызы </li>--}}
{{--                            <li>10.	ҚАЛИЖАНОВ Уәлихан Қалижанұлы </li>--}}
{{--                            <li>11.	ҚИРАБАЕВ Серік Смайылұлы </li>--}}
{{--                            <li>12.	ҚОНАЕВ Диар Асқарұлы </li>--}}
{{--                            <li>13.	ҚОРАБАЙ Серікқазы Сыбанбайұлы </li>--}}
{{--                            <li>14.	ҚЫДЫР Төрәлі Еділбайұлы </li>--}}
{{--                            <li>15.	МҰҚАН Амангелді Оразбайұлы</li>--}}
{{--                            <li>16.	ОРДА Гүлжаһан Жұмабердіқызы </li>--}}
{{--                            <li>17.	ПІРӘЛІ Гүлзия Жайлауқызы </li>--}}
{{--                            <li>18.	РАҚЫШ Жұмашай Сайлауқызы </li>--}}
{{--                            <li>19.	СУЛТАН Ертай </li>--}}
{{--                            <li>20.	СӘУЛЕМБЕК Гүлмира Рзаханқызы </li>--}}
{{--                            <li>21.	ШАРИПОВА Диляра Сапарғалиқызы </li>--}}
{{--                            <li>22.	ХАМРАЕВ Алимжан Тиликович</li>--}}
{{--                        </ul>--}}
                    </div>
                    <div class="news__state__date">
                        <div class="pnew__state__date">

                        </div>
                    </div>
                </div>
            </div>
            @endif
                @if (LaravelLocalization::getCurrentLocale() == "ru")
                    <div class="news">
                        <div class="news__state">
                            <div class="news__state__headline">
                                <h1>Ученный совет института</h1>
                            </div>
                            <div class="news__state__img">

                            </div>
                            <div class="news__state__text">
                                Органом коллегиального руководства является Ученый совет, в состав котороговходят, директор, заместители, руководители научных проектов и программ. Состав Ученогосовета утверждается Директором.
                                В компетенцию Ученого совета входит – рассмотрение и утверждение основныхнаправлений деятельности Института,   перспективных   и   годовых   планов   научно-исследовательских и экспериментальных работ, планов и отчетов руководителей, другие вопросы деятельности Института.
                                Ученый совет правомочен принимать решение, если на заседании присутствуют неменее 2/3 его членов.
                                Решения Ученого совета принимается открытым голосованием большинством голосов присутствующих членов Ученого совета.
                                По отдельным вопросам решение может приниматься путем тайного голосования.
                                В случае несогласия Директора с решением Ученого совета вопрос передается на рассмотрение Органу государственного управления.<br/><br/>

                                <div style="text-align: center;"><h3>Члены Ученого совета</h3></div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/Matyzhanov.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>МАТЫЖАНОВ Кенжехан Ислямжанович(председатель)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/Almira.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>КАЛИЕВА Альмира Каиртаевна (заместитель председателя)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>АКЫШ Нурдаулет Бабиханович</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>АНАНЬЕВА Светлана Викторовна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>АЗИБАЕВА Бахытжан Уалиевна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ЕЛЕУКЕНОВ Шериаздан Рустемович</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/IsimaqovaAigul.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ИСМАКОВА Айгуль Сериковна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/KenzhequlovaAinur.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>КЕНДЖАКУЛОВА Айнур Бериковна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/QaztuganovaAinur.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>КАЗТУГАНОВА Айнур Жасанбергеновна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>КАЛИЖАНОВ Уалихан Калижанович</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>КИРАБАЕВ Серик Смаилович</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/QonayevDiyar.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>КОНАЕВ Диар Аскарович</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>КОРАБАЙ Серікқазы Сыбанбайулы</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/QydyrTorali.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>КЫДЫР Торали Едилбайулы</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/MuqanAmangeldi.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>МУКАН Амангелды Оразбайулы</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/OrdaGulzhahan.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ОРДА Гульжахан Жумабердиевна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/PiraliGulziya.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ПРАЛИ Гульзия Жайлауовна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/RaqyshZhumashai.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>РАКЫШ Жумашай Сайлауовна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/Yertai.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>СУЛТАН Ертай</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/SaulembekGulmira.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>САУЛЕМБЕК Гульмира Рзахановна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ШАРИПОВА Диляра Сапаргалиевна</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5 mb-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ХАМРАЕВ Алимжан Тиликович</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                1. МАТЫЖАНОВ Кенжехан Ислямжанович(председатель)<br/>--}}
{{--                                2. КАЛИЕВА Альмира Каиртаевна (заместитель председателя)<br/>--}}
{{--                                3. АКЫШ Нурдаулет Бабиханович<br/>--}}
{{--                                4. АНАНЬЕВА Светлана Викторовна<br/>--}}
{{--                                5. АЗИБАЕВА Бахытжан Уалиевна<br/>--}}
{{--                                6. ЕЛЕУКЕНОВ Шериаздан Рустемович<br/>--}}
{{--                                7. ИСМАКОВА Айгуль Сериковна<br/>--}}
{{--                                8. КЕНДЖАКУЛОВА Айнур Бериковна<br/>--}}
{{--                                9. КАЗТУГАНОВА Айнур Жасанбергеновна<br/>--}}
{{--                                10. КАЛИЖАНОВ Уалихан Калижанович<br/>--}}
{{--                                11. КИРАБАЕВ Серик Смаилович<br/>--}}
{{--                                12. КОНАЕВ Диар Аскарович<br/>--}}
{{--                                13. КОРАБАЙ Серікқазы Сыбанбайулы<br/>--}}
{{--                                14. КЫДЫР Торали Едилбайулы<br/>--}}
{{--                                15. МУКАН Амангелды Оразбайулы<br/>--}}
{{--                                16. ОРДА Гульжахан Жумабердиевна<br/>--}}
{{--                                17. ПРАЛИ Гульзия Жайлауовна<br/>--}}
{{--                                18. РАКЫШ Жумашай Сайлауовна<br/>--}}
{{--                                19. СУЛТАН Ертай<br/>--}}
{{--                                20. САУЛЕМБЕК Гульмира Рзахановна<br/>--}}
{{--                                21. ШАРИПОВА Диляра Сапаргалиевна<br/>--}}
{{--                                22. ХАМРАЕВ Алимжан Тиликович<br/>--}}

                            </div>
                            <div class="news__state__date">
                                <div class="pnew__state__date">

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (LaravelLocalization::getCurrentLocale() == "en")
                    <div class="news">
                        <div class="news__state">
                            <div class="news__state__headline">
                                <h1>Scientific council</h1>
                            </div>
                            <div class="news__state__img">

                            </div>
                            <div class="news__state__text">
                                The Scientific Council which includes the Director, Deputies, managers of scientific projects and programs is the Body of the collegial leadership. The composition of the Scientific  Council is approved by the Director.
                                The competence of the Scientific  Council includes - consideration and approval of the main directions of the Institute's activities, long-term and annual plans of research and experimental work, plans and reports of managers, other issues of the Institute.
                                The Scientific Council is authorized to take the decision if at least 2/3 of its members are present at the meeting.
                                Decisions of the Scientific Council are adopted by open voting, by a majority of votes of the present members of the Scientific Council.
                                On specific issues, the decision may be taken by secret ballot.<br/>

                                In the case of disagreement of the Director with the decision of the Scientific Council, the issue should be transferred to the consideration of the public administration body.<br/><br/>
                                <div style="text-align: center;"><h3>Members of the Academic Council</h3></div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/Matyzhanov.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>MATYZHANOV Kenzhekhan Islyamzhanuly (chairman)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/Almira.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KALIEVA Almira Kairtaevna (Deputy Chairman)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>AKYSH Nurdaulet Babikhanovich</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ANANIEVA Svetlana Viktorovna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>AZIBAEVA Bakhytzhan Ualievna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ELEUKENOV Sheriazdan Rustemovich</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/IsimaqovaAigul.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ISMAKOVA Aigul Serikovna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/KenzhequlovaAinur.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KENJAKULOVA Ainur Berikovna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/QaztuganovaAinur.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KAZTUGANOVA Ainur Zhasanbergenovna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KALIZHANOV Ualikhan Kalizhanovich</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KIRABAEV Serik Smailovich</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/QonayevDiyar.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KONAEV Diar Askarovich</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KORABAY Serіkkazy Sybanbayuly</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/QydyrTorali.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KYDYR Torali Edilbayuly</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/MuqanAmangeldi.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>MUKAN of Amangeldy Orazbayuly</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/OrdaGulzhahan.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>ORDA Gulzhakhan Zhumaberdievna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/PiraliGulziya.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>PRALI Gulzia Zhailauovna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/RaqyshZhumashai.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>RAKYSH Zhumashay Saylauovna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/Yertai.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>SULTAN Yertay</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('images/stuff/SaulembekGulmira.jpg')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>SAULEMBEK Gulmira Rzahanovna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>SHARIPOVA Dilyara Sapargalievna</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mt-5 mb-5">
                                        <div class="structur__admins">
                                            <div class="structur__admins__men">
                                                <div class="structur__admins__men__photo">
                                                    <img src="{{ asset('https://via.placeholder.com/300x450')}}">
                                                </div>
                                                <div class="structur__admins__men__name">
                                                    <div class="structur__admins__men__name__text">
                                                        <p>KHAMRAEV Alimzhan Tilikovich</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                1. MATYZHANOV Kenzhekhan Islyamzhanuly (chairman)<br/>--}}
{{--                                2. KALIEVA Almira Kairtaevna (Deputy Chairman)<br/>--}}
{{--                                3. AKYSH Nurdaulet Babikhanovich<br/>--}}
{{--                                4. ANANIEVA Svetlana Viktorovna<br/>--}}
{{--                                5. AZIBAEVA Bakhytzhan Ualievna<br/>--}}
{{--                                6. ELEUKENOV Sheriazdan Rustemovich<br/>--}}
{{--                                7. ISMAKOVA Aigul Serikovna<br/>--}}
{{--                                8. KENJAKULOVA Ainur Berikovna<br/>--}}
{{--                                9. KAZTUGANOVA Ainur Zhasanbergenovna<br/>--}}
{{--                                10. KALIZHANOV Ualikhan Kalizhanovich<br/>--}}
{{--                                11. KIRABAEV Serik Smailovich<br/>--}}
{{--                                12. KONAEV Diar Askarovich<br/>--}}
{{--                                13. KORABAY Serіkkazy Sybanbayuly<br/>--}}
{{--                                14. KYDYR Torali Edilbayuly<br/>--}}
{{--                                15. MUKAN of Amangeldy Orazbayuly<br/>--}}
{{--                                16. ORDA Gulzhakhan Zhumaberdievna<br/>--}}
{{--                                17. PRALI Gulzia Zhailauovna<br/>--}}
{{--                                18. RAKYSH Zhumashay Saylauovna<br/>--}}
{{--                                19. SULTAN Yertay<br/>--}}
{{--                                20. SAULEMBEK Gulmira Rzahanovna<br/>--}}
{{--                                21. SHARIPOVA Dilyara Sapargalievna<br/>--}}
{{--                                22. KHAMRAEV Alimzhan Tilikovich<br/>--}}

                            </div>
                            <div class="news__state__date">
                                <div class="pnew__state__date">

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
        </div>
    </div>

@endsection
