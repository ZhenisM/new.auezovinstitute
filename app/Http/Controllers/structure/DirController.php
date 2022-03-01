<?php

namespace App\Http\Controllers\structure;

use App\Altyn;
use App\Director;
use App\Culture;
use App\HalykUniversity;
use App\Keruen;
use App\Museum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inst;

class DirController extends Controller
{
   public function index()
    {
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        // $newses = Article::orderBy('id', 'desc')->where('locale', app()->getLocale())->where('published', 1)->paginate(12);
        $directors = Director::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('structure.index', [
            'museums' =>  $museums,
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'directors' => $directors,
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
//        $director = Director::all('id', 'title_' . \App::getLocale() . ' as title', 'image_show', 'description_short', 'description_' . \App::getLocale() . ' as description')
//          ->where('id', $id)->first();
        $director = Director::all('id', 'image_show', 'published', 'title_' . \App::getLocale() . ' as title', 'description_short_' . \App::getLocale() . ' as description_short', 'description_' . \App::getLocale() . ' as description')->where('published', 1)->where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('structure.show', [
            'museums' =>  $museums,
            'altyns' =>  $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'director' => $director,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
