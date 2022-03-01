<?php

namespace App\Http\Controllers\altyn;

use App\Altyn;
use App\Book;
use App\HalykUniversity;
use App\Keruen;
use App\Museum;
use Illuminate\Http\Request;
use App\Culture;
use App\Http\Controllers\Controller;
use App\Inst;

class AltynController extends Controller
{
    public function index()
    {
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        //$altyns = Altyn::orderBy('id', 'desc')->where('published', 1)->where('isgoldenfund', 1)->paginate(12);
        $altyns = Altyn::all('id', 'title_' . \App::getLocale() . ' as title', 'description_' . \App::getLocale() . ' as description', 'image', 'image_show', 'created_at', 'published')->where('published', 1);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        $books = Book::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->where('book_section', 1)->paginate(36);
        return view('altyns.index', [
            'museums' =>  $museums,
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
            'books' => $books
        ]);
    }



    public function show($id)
    {
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        //$altyn = Altyn::where('id', $id)->first();
        $altyn = Altyn::all('id', 'title_' . \App::getLocale() . ' as title', 'description_' . \App::getLocale() . ' as description', 'image', 'image_show', 'created_at', 'published')->where('published', 1)->where('id', $id)->first();
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruen = Keruen::where('id', $id)->first();
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyk = HalykUniversity::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('altyns.show', [
            'museums' =>  $museums,
            'altyn' =>  $altyn,
            'altyns' =>  $altyns,
            'keruen' => $keruen,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'halyk' => $halyk,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
