<?php

namespace App\Http\Controllers\education;

use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function index()
    {
        return view('education.index');
    }

    public function show($id)
    {
        $education = Education::all('id', 'title_' . \App::getLocale() . ' as title', 'description_' . \App::getLocale() . ' as description', 'image', 'image_show', 'created_at', 'published')
            ->where('published', 1)->where('id', $id)->first();

        return view('education.show' , ['education' => $education]);
    }

}
