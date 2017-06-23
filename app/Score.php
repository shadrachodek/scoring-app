<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //

    protected $fillable = [
        'user_id', 'subject_id', 'score',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
