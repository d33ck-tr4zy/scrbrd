<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelayReason extends Model
{
    use HasFactory;

    public function memberDelays(){
        return $this->hasMany(MemberDelayReason::class);
    }
}
