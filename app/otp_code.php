<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otp_code extends Model
{
    public function user()
    {
        return $this->hasOne('App\user', 'foreign_key');
    }
}
