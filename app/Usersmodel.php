<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Usersmodel extends Model
{
    protected $table =  'user';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['Name','Email','Password'];

}
