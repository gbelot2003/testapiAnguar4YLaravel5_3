<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{


    protected $fillable = ['title', 'joke'];


    public function user()
    {
        $this->belongsTo(User::class);
    }

}
