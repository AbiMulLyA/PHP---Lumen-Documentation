<?php
namespace Demo\Models;
use Illuminate\Database\Eloquent\Model;


class Todo extends Model
{
    // protected $table = "user-todo";
    // protected $timestamp = true;
    protected $guarded = ["id", "title","completed","user_id"]; // mass input
    // protected $fillable = 

    public function user()
    {
        return $this->belongsTo('Demo\Models\User');
    }
}