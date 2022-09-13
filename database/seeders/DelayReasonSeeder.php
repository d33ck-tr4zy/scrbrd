<?php

namespace Database\Seeders;

use App\Models\DelayReason;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DelayReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DelayReason::factory()->create([
            'reason' => 'Insufficient time',
        ]);

        DelayReason::factory()->create([
            'reason' => 'Insufficient knowledge',
        ]);
        DelayReason::factory()->create([
            'reason' => 'Miscommunication',
        ]);
        DelayReason::factory()->create([
            'reason' => 'Changes in requirement',
        ]);
        DelayReason::factory()->create([
            'reason' => 'Too much ad-hoc',
        ]);
        DelayReason::factory()->create([
            'reason' => 'Negligence in QC',
        ]);
    }
}
