<!DOCTYPE html>
<html class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="csrf-token" content="{{ csrf_token() }}">


  <!--       <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/popup.css"> -->
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

       <script src="{{ asset('js/libs/jquery.min.js') }}"></script>
       <script src="{{ asset('js/libs/zip.min.js') }}"></script>


        <script>
            document.onreadystatechange = function () {

                if (document.readyState == "complete") {
                    window.reader = ePubReader("{{ URL::to($bok ? asset('uploads/' . $bok->ebook_show) : "") }}", {
                        restore: true
                    });
                }
            };


        </script>


        <script src="{{ asset('js/libs/screenfull.js') }}"></script>
        <script src="{{ asset('js/epub.min.js') }}"></script>
        <script src="{{ asset('js/reader.min.js') }}"></script>
        <link href="{{ asset('https://use.fontawesome.com/releases/v5.8.1/css/all.css') }}" rel="stylesheet">
    </head>
    <body>
    <div id="sidebar">
        <div id="panels">
            <!-- <input id="searchBox" placeholder="search" type="search"> -->

            <!-- <a id="show-Search" class="show_view icon-search" data-view="Search">Search</a> -->
            <a id="show-Toc" class="show_view fas fa-book" data-view="Toc">TOC</a>
            <a id="show-Bookmarks" class="show_view fas fa-bookmark" data-view="Bookmarks">Bookmarks</a>
            <!-- <a id="show-Notes" class="show_view icon-edit" data-view="Notes">Notes</a> -->

        </div>
        <div id="tocView" class="view">
        </div>
        <div id="searchView" class="view">
            <ul id="searchResults"></ul>
        </div>
        <div id="bookmarksView" class="view">
            <ul id="bookmarks"></ul>
        </div>
        <div id="notesView" class="view">
            <div id="new-note">
                <textarea id="note-text"></textarea>
                <button id="note-anchor">Anchor</button>
            </div>
            <ol id="notes"></ol>
        </div>
    </div>
    <div id="main">

        <div id="titlebar">
            <div id="opener">
                <a id="slider" class="show_view fas fa-bars">Menu</a>
            </div>
            <div id="metainfo">
                <span id="book-title"></span>
                <span id="title-seperator">&nbsp;&nbsp;–&nbsp;&nbsp;</span>
                <span id="chapter-title"></span>
            </div>
            <div id="title-controls">
                <a id="bookmark" class="fas fa-bookmark">Bookmark</a>
{{--                <a id="setting" class="fas fa-cog">Settings</a>--}}
{{--                <a id="fullscreen" class="fas fa-compress-arrows-alt">Fullscreen</a>--}}
            </div>
        </div>

        <div id="divider"></div>
        <div id="prev" class="arrow">‹</div>
        <div id="viewer"></div>
        <div id="next" class="arrow">›</div>

        <div id="loader"><img src="{{ asset('img/loader.gif') }}""></div>
    </div>
    <div class="modal md-effect-1" id="settings-modal">
        <div class="md-content">
            <h3>Settings</h3>
            <div>
                <p>
                    <input type="checkbox" id="sidebarReflow" name="sidebarReflow">Reflow text when sidebars are open.
                </p>
            </div>
            <div class="closer icon-cancel-circled"></div>
        </div>
    </div>
    <div class="overlay"></div>
    </body>
</html>


