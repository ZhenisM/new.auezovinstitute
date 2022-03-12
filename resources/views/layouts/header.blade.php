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
                    <li><a href="https://www.facebook.com/auezovinstitute/?ref=bookmarks" target="_blank" class="facebook"><i class="fab fa-facebook-square"></i></a></li>
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
        //        // Требует улучшения
                $locale = LaravelLocalization::getCurrentLocale();
                $rootMenus = Menu::all('id', 'name_' . $locale . ' as name', 'link', 'parent_id')->where('parent_id',0);
        ?>
        <div class="topnav" id="myTopnav">
            <!--<a href="#home" class="active">Home</a>-->
            @foreach($rootMenus as $menu)
                <?php
                $menuItems = array(20, 24, 28);
                if(!in_array($menu->id, $menuItems)) {

                    $childmenus = null;
                    $childmenus = Menu::all('id', 'name_' . $locale . ' as name', 'link', 'parent_id')->where('parent_id', $menu->id);

                    if ($childmenus->count() > 0) {
                ?>
                    <div class="dropdown_m">
                        <button @if ($menu->link != null) onclick="location.href='{{$menu->link}}'" @endif class="dropbtn">{{$menu->name}}
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            @foreach($childmenus as $chm)
                            <a href="{{$chm->link}}">{{$chm->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <?php
                    } else {
                    ?>
                    <a href="{{$menu->link}}">{{$menu->name}}</a>
                <?php
                    }
                }
                ?>
            @endforeach
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>



        <?php
//        // Требует улучшения
//        $locale = LaravelLocalization::getCurrentLocale();
//        $rootMenus = Menu::all('id', 'name_' . $locale . ' as name', 'link', 'parent_id')->where('parent_id',0);
        ?>
{{--        <div class="topnav" id="myTopnav">--}}
{{--            @foreach($rootMenus as $menu)--}}
{{--                <a --}}
                <?php //if ($menu->link == null) { echo "";} else {echo "onclick=location.href='" . $menu->link . "'"; }
                ?>
{{--                class="menu-item">{{$menu->name}}--}}
                <?php
//                $childmenus = null;
//                $childmenus = Menu::all('id', 'name_' . $locale . ' as name', 'link', 'parent_id')->where('parent_id', $menu->id);
//
//                if ($childmenus->count() > 0)
//                {
                ?>
{{--                <i class="fas fa-chevron-down"></i>--}}
{{--                <ul class="sub-menu sub-menu-mod">--}}
{{--                    @foreach($childmenus as $chm)--}}
{{--                    <li><div onclick="location.href='{{$chm->link}}'">{{$chm->name}}</div></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
                <?php
               // }
                ?>
{{--            </a>--}}
{{--            @endforeach--}}
{{--                <a href="javascript:void(0);" class="icon" onclick="myFunction()">--}}
{{--                    <i class="fa fa-bars"></i>--}}
{{--                </a>--}}
{{--        </div>--}}
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

    // блок который фиксируется с верху
    var avatarElem = document.getElementById('avatar');

    // пустой блок с такойже высотой для подставления фиксировоному блоку
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
