<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Director extends Model
{
   protected $fillable = ['title_ru', 'title_kk', 'title_en','slug', 'description_short_kk', 'description_short_ru', 'description_short_en', 'description_kk', 'description_ru', 'description_en', 'image', 'image_show', 'meta_title', 'meta_description', 'meta_keyword', 'published', 'create_by', 'modified_by', 'locale'];

    public function setSlugAttribute ($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . Carbon::now()->format('dmyHi'), '-');
    }

    //Polymorphic relation with categories

    public function categories ()
    {
        return $this->morphToMany('App\Category', 'categoryable');
    }

    public function scopeLastArticles ($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
