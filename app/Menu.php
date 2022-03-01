<?php

namespace App;

use Doctrine\DBAL\Schema\Table;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table ='menu';
    public $timestamps = false;

}
