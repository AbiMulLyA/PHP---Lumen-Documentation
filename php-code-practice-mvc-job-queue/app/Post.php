<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'profile'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function author()
    {
        return $this->hasOne('App\Author');
    }
}
