<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDelay extends Model
{
    use HasFactory;

    /**
     * Who created the delay
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member(){
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function reasons(){
        return $this->hasMany(MemberDelayReason::class);
    }
}
