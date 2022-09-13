<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function delays(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MemberDelay::class);
    }

    public function scores(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MemberScore::class);
    }

    public function leaves(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MemberLeave::class);
    }

    public function manpowers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(MemberManpower::class);
    }
}
