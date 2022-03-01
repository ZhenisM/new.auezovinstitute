<?php

namespace App\Http\Controllers\main;
use App\Altyn;
use App\Article;
use App\Book;
use App\Culture;
use App\Banner;
use App\HalykUniversity;
use App\Inst;
use App\Keruen;
use App\Menu;
use App\Museum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use mysql_xdevapi\Exception;


class MainController extends Controller
{
    public function index()
    {
        // dd(app()->getLocale());
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banner = Banner::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $banners = Banner::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $news = Article::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(4)->get();
        $bok = Book::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(8)->get();
        //$aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::all('id', 'title_' . \App::getLocale() . ' as title', 'slug', 'description_' . \App::getLocale() . ' as description', 'image')
            ->where('published', 1);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);

        // old $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.index', [
            'museums' =>  $museums,
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'banner' => $banner,
            'banners' => $banners,
            'news' => $news,
            'bok' => $bok,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }

    public function show($id)
    {
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banner = Banner::orderBy('id', 'desc')->where('published', 1)->paginate(12);
        $banners = Banner::orderBy('id', 'desc')->where('published', 1)->paginate(12);
//        $cultur = Culture::all('id', 'title_' . \App::getLocale() . ' as title', 'image', 'image_show', 'description_' . \App::getLocale() . ' as description', 'published', 'created_at')
//            ->where('published', 1)->where('id', 6);
        $cultur = Culture::select('title_' . \App::getLocale() . ' as title', 'image', 'image_show', 'description_' . \App::getLocale() . ' as description', 'published', 'created_at')->where('published', '=', '1')->where('id', '=', $id)->first();
        if ($cultur == null) abort(404);//throw new \Exception('Null pointer exception');
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('published', 1)->where('locale', \App::getLocale())->paginate(12);
        if (isset($_GET['book_section']))
        {
            $bookSection = $_GET['book_section'];
            $books = Book::orderBy('books_order', 'desc')->where('locale', \App::getLocale())->where('published', 1)->where('book_section', '=', $bookSection)->paginate(36);
        }else
        {
            $books = Book::orderBy('books_order', 'desc')->where('locale', \App::getLocale())->where('published', 1)->where('book_section', '>', 1)->paginate(36);
        }
//        dd($books);
        return view('culture.show', [
            'museums' =>  $museums,
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'banner' => $banner,
            'books' => $books,
            'banners' => $banners,
            'cultur' => $cultur,
            'cultures' => $cultures,
            'aboutses' => $aboutses,
            'id' => $id,
        ]);
    }

    public function education()
    {
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        // dd(app()->getLocale());
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banner = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $banners = Banner::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $news = Article::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(4)->get();
        $bok = Book::orderBy('id', 'desc')->where('locale', \App::getLocale())->take(8)->get();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('main.partials.education', [
            'museums' =>  $museums,
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'banner' => $banner,
            'banners' => $banners,
            'news' => $news,
            'bok' => $bok,
            'aboutses' => $aboutses,
            'cultures' => $cultures
        ]);
    }

}

