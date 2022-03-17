<?php
use App\Menu;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
?>


<footer id="myFooter">
    <div class="container__footer">
        <!-- <div class="logo__footer logo__footer-mod">
            <a href="{{ URL::to('/') }}"><img src="../../images/{{ trans('header.logo') }}"></a>
        </div> -->
        <div class="row container__footer__row">
            <div class="row-right">
{{--                    <ul>--}}
{{--                        <li><a href="{{ URL::to('/structure/administration') }}">{{ trans('footer.leadership') }}</a></li>--}}
{{--                        <li><a href="{{ route('departments.index') }}">{{ trans('footer.departmens') }}</a></li>--}}
{{--                        <li><a href="{{ URL::to('/books') }}">{{ trans('footer.books') }}</a></li>--}}
{{--                        <li><a href="{{ URL::to('/news') }}">{{ trans('footer.news') }}</a></li>--}}
{{--                        <li><a href="{{ URL::to('/main/map_page') }}">{{ trans('footer.contacts') }}</a></li>--}}
{{--                    </ul>--}}


{{--                    <ul>--}}
{{--                        <li><a href="{{ route('scp.index') }}">{{ trans('header.science') }}</a></li>--}}
{{--                        @foreach ($halyks as $halyk)--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{ route('halyks.show', [ 'id' => $halyk->id ]) }}" class="menu-link">{{ trans('header.university') }}</a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                        @foreach ($keruens as $keruen)--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{ route('keruens.show', [ 'id' => $keruen->id ]) }}"  class="menu-link">{{ trans('header.keruen') }}</a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                        @foreach ($altyns as $altyn)--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{ route('altyns.show', [ 'id' => $altyn->id ]) }}"  class="menu-link">{{ trans('header.gold') }}</a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                        @foreach ($museums as $museum)--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{ route('museums.show', [ 'id' => $museum->id ]) }}"  class="menu-link">{{ trans('header.museum') }}</a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
                <div class="footer-left">
                    <div class="footer-left-logo">
                        <a class="footer-left-logo-img" href="{{ URL::to('/') }}"><img src="../../images/{{ trans('header.logo') }}"></a>
                    </div>
                    <div class="social-networks">
                        <ul>
                            <li><a href="https://www.facebook.com/auezovinstitute/?ref=bookmarks" target="_blank" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
                            <li>  <a href="https://www.instagram.com/auezovlitart/" target="_blank" class="inst"><i class="fab fa-instagram"></i></a> </li>
                            <li> <a href="https://www.youtube.com/channel/UC9JHx3xUONV6inEUzbjUjAQ " target="_blank" class="vk"><i class="fab fa-youtube"></i></a>            </li>
                        </ul>
                    </div>
                </div>
                <div class="row-right-links">
                    <div class="row-right-links-item">
                        <img class="res-img" src="../../images/gerb-tmb.png" alt="">
                        <a href="http://sc.edu.gov.kz/">{{ trans('footer.scientifickometee') }}</a>
                    </div>
                    <div class="row-right-links-item">
                        <img class="res-img" src="../../images/auezovmuseium-tmb.jpg" alt="">
                        <a href="/ru/museums/1">{{ trans('footer.museium') }}</a>
                    </div>
                    <div class="row-right-links-item">
                        <img class="res-img" src="../../images/keruen-tmb.jpg" alt="">
                        <a href="/ru/keruens/1">{{ trans('footer.keruen') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="footer-copyright">
        <p><a href="http://auezovinstitute.kz">auezovinstitute.kz</a> КН МОН РК&copy; 2019</p>
    </div> -->
</footer>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script>
    jQuery(document).ready(function () {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
            event.preventDefault();
            event.stopPropagation();

            $(this).siblings().toggleClass("show");


            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

        });
    });

</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
