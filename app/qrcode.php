<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qrcode extends Model
{
    protected $fillable = [
        'name', 'source', 'qrcode'
    ];
}
