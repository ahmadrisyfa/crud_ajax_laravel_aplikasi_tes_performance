<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $guarded =['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
