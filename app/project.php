<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public $timestamps = false;
    protected $fillable=['ProjectName', 'ProjectDescription', 'ImgUrl', 'Date'];
}
