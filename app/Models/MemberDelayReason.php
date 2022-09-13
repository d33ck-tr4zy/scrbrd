<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDelayReason extends Model
{
    use HasFactory;

    public function reason(){
        return $this->belongsTo(DelayReason::class);
    }

    public function delay(){
        return $this->belongsTo(MemberDelay::class);
    }
}
