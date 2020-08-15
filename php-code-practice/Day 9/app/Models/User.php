<?php
namespace Demo\Models;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    // protected $table = "user-todo";
    // protected $timestamp = true;
    protected $guarded = ["id", "name"]; // mass input
    // protected $fillable = 

    public function todos ()
    {
        return $this->hasMany('Demo\Models\Todo');
    }

}