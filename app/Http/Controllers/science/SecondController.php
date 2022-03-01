<?php

namespace App\Http\Controllers\science;

use App\Altyn;
use App\HalykUniversity;
use App\Keruen;
use App\Museum;
use App\Science;
use App\Thehird;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Culture;
use App\Inst;
use App\SecondScience;

class SecondController extends Controller
{
    public function index()
    {
        $thehirds = Thehird::all()->where('locale', \App::getLocale());
        $sciences = Science::all()->where('locale', \App::getLocale());
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $seconds = SecondScience::all('id', 'title_' . \App::getLocale() . ' as title', 'image_show', 'description_' . \App::getLocale() . ' as description');
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('seconds.index', [
            'thehirds' => $thehirds,
            'sciences' => $sciences,
            'museums' => $museums,
            'altyns' => $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'seconds' => $seconds,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }


    public function show($id)
    {
        $thehirds = Thehird::all()->where('locale', \App::getLocale());
        $museums = Museum::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $altyns = Altyn::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $halyks = HalykUniversity::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $keruens = Keruen::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $second = SecondScience::all('id', 'title_' . \App::getLocale() . ' as title', 'image_show', 'description_' . \App::getLocale() . ' as description')->where('id', $id)->first();
        $science = Science::where('id', $id)->first();
        $aboutses = Inst::orderBy('id', 'desc')->where('locale', \App::getLocale())->where('published', 1)->paginate(12);
        $cultures = Culture::orderBy('id', 'desc')->where('locale', \App::getLocale())->get();
        return view('seconds.show', [
            'thehirds' => $thehirds,
            'science' => $science,
            'museums' => $museums,
            'altyns' => $altyns,
            'keruens' => $keruens,
            'halyks' => $halyks,
            'second' => $second,
            'aboutses' => $aboutses,
            'cultures' => $cultures,
        ]);
    }
}
