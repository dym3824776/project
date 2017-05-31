<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'ym_category';

    public $timestamps = false;

    protected $fillable = ['name'];
}
