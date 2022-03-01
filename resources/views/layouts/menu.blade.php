<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 3 - Navbar</title>
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Брэнд</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Институт<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Руководство</a></li>
                        <li><a href="#">Отделы института</a></li>
                        <li><a href="#">Структура</a></li>
                        <li><a href="#">Ученный совет института</a></li>
                        <li><a href="#">Совет молодых ученных/a></li>
                        <li><a href="#">Отделы института</a></li>
                        <li><a href="#">История</a></li>
                        <li><a href="#">Новости</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Научные проекты<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Издания и публикации</a></li>
                        <li><a href="#">Антологии, изданные в рамках программы «Семь граней великой степи»</a></li>
                        <li><a href="#">Золотой фонд</a></li>
                        <li><a href="#">Научные монографий</a></li>
                        <li><a href="#">Книги</a></li>
                    </ul>
                </li>
                <li><a href="#">Мероприятия</a></li>
                <li><a href="#">Интеграция образования и науки</a></li>
                <li><a href="#">Научный журнал "Keruen"</a></li>
                <li><a href="#">НКЦ "Дом музей Ауэзова"</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid" style="margin-top: 20px;">
    <h1 style="font-size: 24px;">Bootstrap 3 - Navbar (основное горизонтальное меню)</h1>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>


