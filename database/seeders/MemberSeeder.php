<?php

namespace Database\Seeders;

use App\Models\DelayReason;
use App\Models\Member;
use App\Models\MemberDelay;
use App\Models\MemberDelayReason;
use App\Models\MemberLeave;
use App\Models\MemberManpower;
use App\Models\MemberScore;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::factory()
            ->has(MemberDelay::factory()
                ->count(random_int(1, 6))
                ->has(MemberDelayReason::factory()
                    ->count(random_int(1, DelayReason::count()-1))
                    ->state(function (array $attributed, MemberDelay $memberDelay) {
                        return ['member_delay_id' => $memberDelay->id];
                    })
                    , 'reasons')
                , 'delays')
            ->has(
                MemberScore::factory()
                    ->count(5)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'scores')
            ->has
            (
                MemberLeave::factory()
                    ->count(3)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'leaves'
            )
            ->has(
                MemberManpower::factory()
                    ->count(8)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'manpowers')
            ->create(
                [
                    'long_name' => 'Imannuel Benny',
                    'name' => 'Benny',
                    'joined' => Carbon::createFromDate('2021', '3', '20'),
                    'active' => true,
                ]);

        Member::factory()
            ->has(MemberDelay::factory()
                ->count(random_int(1, 6))
                ->has(MemberDelayReason::factory()
                    ->count(random_int(1, DelayReason::count()-1))
                    ->state(function (array $attributed, MemberDelay $memberDelay) {
                        return ['member_delay_id' => $memberDelay->id];
                    })
                    , 'reasons')
                , 'delays')
            ->has(
                MemberScore::factory()
                    ->count(5)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'scores')
            ->has(
                MemberLeave::factory()
                    ->count(3)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'leaves')
            ->has(
                MemberManpower::factory()
                    ->count(8)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'manpowers')
            ->create([
                'long_name' => 'Andi Eka Siswandhi',
                'name' => 'Andi',
                'joined' => Carbon::createFromDate('2021', '8', '4'),
                'active' => true,
            ]);

        Member::factory()
            ->has(MemberDelay::factory()
                ->count(random_int(1, 6))
                ->has(MemberDelayReason::factory()
                    ->count(random_int(1, DelayReason::count()-1))
                    ->state(function (array $attributed, MemberDelay $memberDelay) {
                        return ['member_delay_id' => $memberDelay->id];
                    })
                    , 'reasons')
                , 'delays')
            ->has(
                MemberScore::factory()
                    ->count(5)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'scores')
            ->has(
                MemberLeave::factory()
                    ->count(3)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'leaves')
            ->has(
                MemberManpower::factory()
                    ->count(8)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'manpowers')
            ->create(
                [
                    'long_name' => 'Kukuh Tri',
                    'name' => 'Kukuh',
                    'joined' => Carbon::createFromDate('2022', '1', '20'),
                    'active' => true,
                ]);


        Member::factory()
            ->has(MemberDelay::factory()
                ->count(random_int(1, 6))
                ->has(MemberDelayReason::factory()
                    ->count(random_int(1, DelayReason::count()-1))
                    ->state(function (array $attributed, MemberDelay $memberDelay) {
                        return ['member_delay_id' => $memberDelay->id];
                    })
                    , 'reasons')
                , 'delays')
            ->has(
                MemberScore::factory()
                    ->count(5)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'scores')
            ->has(
                MemberLeave::factory()
                    ->count(3)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'leaves')
            ->has(
                MemberManpower::factory()
                    ->count(8)
                    ->state(function (array $attributes, Member $member) {
                        return ['member_id' => $member->id];
                    })
                , 'manpowers')
            ->create([
                'long_name' => 'Satrio Budyo',
                'name' => 'Satrio',
                'joined' => Carbon::createFromDate('2021', '6', '20'),
                'active' => false,
            ]);
    }
}
