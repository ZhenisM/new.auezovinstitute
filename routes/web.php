<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('qr/{url}', function ($url) {
    \QrCode::size(200)->format('png')->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
    return view('qrCode', ['url' => $url]);
});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]
], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/culture/{id}', 'main\MainController@show')->name('main.show');



    Route::group(['prefix'=>'/', 'namespace'=>'main'], function (){
        Route::get('/', 'MainController@index');
        Route::get('/main/museum', 'MuseumController@museum');
        Route::get('/main/map_page', 'MapController@map_page');
        Route::get('/main/education', 'MainController@education');
    });


    Route::get('/search', 'SearchController@search');
//    Route::get('/search/{id}', 'SearchController@show');

    Route::group(['prefix'=>'news', 'namespace'=>'news'], function (){
        Route::get('/', 'NewsController@index')->name('news.index');
        Route::get('/{id}', 'NewsController@show')->name('news.show');
    });

    Route::group(['prefix'=>'notice', 'namespace'=>'notice'], function (){
        Route::get('/', 'NoticeController@index')->name('notice.index');
        Route::get('/{id}', 'NoticeController@show')->name('notice.show');
    });

    Route::group(['prefix'=>'ethic', 'namespace'=>'ethic'], function (){
        Route::get('/', 'EthicController@index')->name('ethic.index');
        Route::get('/document/{id}', 'EthicController@document')->name('ethic.document');
        Route::get('/documentsList', 'EthicController@documentsList')->name('ethic.documentsList');
        Route::get('/ethicofficer', 'EthicController@ethicofficer')->name('ethic.ethicofficer');
    });


    Route::group(['prefix'=>'halyks', 'namespace'=>'halyk'], function (){
        Route::get('/', 'HalykController@index')->name('halyks.index');
        Route::get('/{id}', 'HalykController@show')->name('halyks.show');
    });

    Route::group(['prefix'=>'education', 'namespace'=>'education'], function (){
        Route::get('/', 'EducationController@index')->name('education.index');
        Route::get('/{id}', 'EducationController@show')->name('education.show');
    });

    Route::group(['prefix'=>'keruens', 'namespace'=>'keruen'], function (){
        Route::get('/', 'KeruenController@index')->name('keruens.index');
        Route::get('/{id}', 'KeruenController@show')->name('keruens.show');
    });

    Route::group(['prefix'=>'altyns', 'namespace'=>'altyn'], function (){
        Route::get('/', 'AltynController@index')->name('altyns.index');
        Route::get('/{id}', 'AltynController@show')->name('altyns.show');
    });

    Route::group(['prefix'=>'museums', 'namespace'=>'museum'], function (){
        Route::get('/', 'MuseumController@index')->name('museums.index');
        Route::get('/{id}', 'MuseumController@show')->name('museums.show');
    });

    Route::group(['prefix'=>'books', 'namespace'=>'books'], function (){
        Route::get('/', 'BooksController@index')->name('books.index');
        Route::get('/{id}', 'BooksController@show')->name('books.show');
    });

    Route::group(['prefix'=>'reader', 'namespace'=>'books'], function (){
        Route::get('/{id}', 'BooksController@show_book')->name('reader.index');
    });

    Route::group(['prefix'=>'abouts', 'namespace'=>'abouts'], function (){
        Route::get('/', 'AboutController@index')->name('abouts.index');
        Route::get('/{id}', 'AboutController@show')->name('abouts.show');
    });


    Route::group(['prefix'=>'departments', 'namespace'=>'departments'], function (){
        Route::get('/', 'DepController@index')->name('departments.index');
        Route::get('/{id}', 'DepController@show')->name('departments.show');
        Route::get('/structure/{id}', 'DepController@structure')->name('departments.structure');
    });

    Route::group(['prefix'=>'sciences', 'namespace'=>'science'], function (){
        Route::get('/', 'ScController@index')->name('sciences.index');
        Route::get('/{id}', 'ScController@show')->name('sciences.show');
        Route::get('/young/{id}', 'ScController@young')->name('sciences.young');
        Route::get('/council/{id}', 'ScController@council')->name('sciences.council');
    });

    Route::group(['prefix'=>'seconds', 'namespace'=>'science'], function (){
        Route::get('/', 'SecondController@index')->name('seconds.index');
        Route::get('/{id}', 'SecondController@show')->name('seconds.show');
    });

    Route::group(['prefix'=>'thehirds', 'namespace'=>'science'], function (){
        Route::get('/', 'ThehirdController@index')->name('thehirds.index');
        Route::get('/{id}', 'ThehirdController@show')->name('thehirds.show');
    });


    Route::group(['prefix'=>'scp', 'namespace'=>'science'], function (){
        Route::get('/', 'ScpController@index')->name('scp.index');
    });

    Route::group(['prefix'=>'structure', 'namespace'=>'structure'], function (){
        Route::get('/', 'AdministrationController@index');
        Route::get('/administration', 'AdministrationController@administration');
        Route::get('/{id}', 'DirController@show')->name('structure.show');
    });

    Route::get('contact-us', 'ContactUsController@contactUS');
    Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);

    Route::get('comments', 'CommentsController@index');
    Route::post('comments', ['as'=>'comments.store','uses'=>'CommentsController@commentSaveData']);
});



Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::get('/books/qr', 'BookController@qr')->name('admin.books.qr');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/articles', 'ArticleController', ['as'=>'admin']);
    Route::resource('/halyks', 'HalykUniversityController', ['as'=>'admin']);
    Route::resource('/keruens', 'KeruenController', ['as'=>'admin']);
    Route::resource('/altyns', 'AltynController', ['as'=>'admin']);
    Route::resource('/museums', 'MuseumController', ['as'=>'admin']);
    Route::resource('/books', 'BookController', ['as'=>'admin']);
    Route::resource('/cultures', 'CultureController', ['as'=>'admin']);
    Route::resource('/insts', 'InstController', ['as'=>'admin']);
    Route::resource('/departments', 'DepartmentsController', ['as'=>'admin']);
    Route::resource('/sciences', 'ScienceController', ['as'=>'admin']);
    Route::resource('/seconds', 'SecondScienceController', ['as'=>'admin']);
    Route::resource('/thehirds', 'ThehirdController', ['as'=>'admin']);
    Route::resource('/directors', 'DirectorController', ['as'=>'admin']);
    Route::resource('/banners', 'BannerController', ['as'=>'admin']);
    Route::resource('/qrcodes','qrcodeController', ['as'=>'admin']);
    Route::group(['prefix' => 'user_managment', 'namespace' => 'UserManagment'], function() {
        Route::resource('/user', 'UserController', ['as'=>'admin.user_managment']);
    });
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

