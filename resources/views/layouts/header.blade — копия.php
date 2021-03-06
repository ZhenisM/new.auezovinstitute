<?php
use App\Menu;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
?>

<div class="header">
    <div class="header__nav">
        <div class="header__nav__logo">
            <div class="logo">
                <a href="{{ URL::to('/') }}"><img src="../../images/{{ trans('header.logo') }}"></a>
            </div>
            <div class="social-networks">
                <ul>
                    {{--                            <li> <a href="https://www.google.ru/" target="_blank" class="google"><i class="fa fa-google-plus"></i></a> </li>--}}
                    <li><a href="https://www.facebook.com/litart/ " target="_blank" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
                    <li>  <a href="https://www.instagram.com/auezovlitart/" target="_blank" class="inst"><i class="fa fa-instagram"></i></a> </li>
                    <li> <a href="https://www.youtube.com/channel/UC9JHx3xUONV6inEUzbjUjAQ " target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>            </li>
                </ul>
            </div>
        </div>
        <div class="header__wrap">
            <div class="search search_clearfix">
                <form action="{{ URL::to('search') }}" method="GET" class="searchform">
                    <div class="search__text">
                        <input type="text" value="" placeholder="{{ trans('main.search') }}" name="search"/>
                    </div>
                    <input type="image" src="../../images/search.png"/>
                </form>
            </div>
            <div class="header__local">
{{--                <a href="#box" class="lang-flag {{ app()->getLocale() }}" onclick="openbox('box'); return false">{{ trans('header.language') }}</a>--}}
                <div class="header__local__item">
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li id="box" class="lang-flag {{ $localeCode }} {{ app()->getLocale() == $localeCode ? 'active' : '' }}" data="{{ $localeCode }}">
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__blank">

    </div>

    <div id="avatar" class="header__menu">
        <?php
        // ?????????????? ??????????????????
        $locale = LaravelLocalization::getCurrentLocale();
        $rootMenus = Menu::all('id', 'name_' . $locale . ' as name', 'link', 'parent_id')->where('parent_id',0);
        ?>
        <div class="topnav" id="myTopnav">
            @foreach($rootMenus as $menu)
            <a href="#home" class="menu-item">???????????????? <i class="fas fa-chevron-down"></i>
                <ul class="sub-menu sub-menu-mod">
                    <li><div>1</div></li>
                    <li><div>1</div></li>
                    <li><div>1</div></li>
                </ul>
            </a>
            <a href="#news" class="menu-item">?????????????? ?????????????? <i class="fas fa-chevron-down"></i>
                <ul class="sub-menu sub-menu-mod">
                    <li><div onclick="location.href='/news'">?????????????? ?? ????????????????????</div></li>
                    <li><div onclick="location.href='/keuren'">??????????????????, ???????????????? ?? ???????????? ?????????????????? ?????????? ???????????? ?????????????? ????????????</div></li>
                    <li><div>?????????????? ????????</div></li>
                </ul>
            </a>
            <a href="#contact" class="menu-item">??????????????????????</a>
            <a href="#about" class="menu-item">???????????????????? ?????????????????????? ?? ??????????</a>
            <a href="#about" class="menu-item">?????????????? ???????????? "Keruen"</a>
            <a href="#about" class="menu-item">?????? "?????? ?????????? ??????????????"</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <script>
            /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </div>
</div>


<script type="text/javascript">
    let eL = document.getElementsByClassName('menu-item');
    for (let i = 0; i < eL.length; i++) {
        eL[i].addEventListener('mouseenter', showSub, false);
        eL[i].addEventListener('mouseleave', hideSub, false);
    }

    function showSub () {

        // if (this.children.length>0){
        if (this.children.length>1){
            this.children[1].style.height = "auto";
            this.children[1].style.opacity = "1";
            this.children[1].style.overflow = "visible";
            this.children[1].style.position = "absolute";
            this.children[1].style.left = this.offsetLeft + "px";
            this.children[1].style.top = this.offsetTop + this.offsetHeight + 10 + "px";
            this.children[1].style.width = this.offsetWidth*2 + "px";
        } else {
            return false;
        }
    }

    function hideSub () {
        if (this.children.length>0){
            this.children[1].style.height = "0";
            this.children[1].style.opacity = "0";
            this.children[1].style.overflow = "hidden";
        } else {
            return false;
        }
    }

    // function openbox(box) {
    //     var display = document.getElementById('box').style.display;
    //     if (display == "none") {
    //         document.getElementById('box').style.display = "block";
    //     } else {
    //         document.getElementById('box').style.display = "none";
    //     }
    // }
    //
    // window.onscroll = function() {
    //     document.getElementById('box').style.display = "none";
    // }

    // ???????? ?????????????? ?????????????????????? ?? ??????????
    var avatarElem = document.getElementById('avatar');

    // ???????????? ???????? ?? ?????????????? ?????????????? ?????? ???????????????????????? ?????????????????????????? ??????????
    var headerBlank = document.getElementsByClassName('header__blank');

    var avatarSourceBottom = avatarElem.getBoundingClientRect().top + window.pageYOffset;


    window.onscroll = function() {
        if (avatarElem.classList.contains('fixed') && window.pageYOffset < avatarSourceBottom) {
            avatarElem.classList.remove('fixed');
            headerBlank[0].style.display = 'none';
        } else if (window.pageYOffset > avatarSourceBottom) {
            avatarElem.classList.add('fixed');
            headerBlank[0].style.display = 'block';
        }
    };


</script>
