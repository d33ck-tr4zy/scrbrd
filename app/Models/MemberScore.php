<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberScore extends Model
{
    use HasFactory;

    public function member(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    /**
     * Relationship to ScoreTypes to get the score type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(){
        return $this->belongsTo(ScoreType::class, 'score_type_id');
    }

    public function getWeightAttribute() {

        return ScoreWeight::where('score_type_id', $this->score_type_id)
            ->where('year', $this->year)
            ->where('month', $this->month)
            ->latest()
            ->first();
    }
}
