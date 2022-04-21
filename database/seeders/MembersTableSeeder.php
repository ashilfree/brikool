<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Member;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = Account::all();
        Member::factory()->count(4)->make()->each(function ($member) use ($accounts){
            $member->account_id = $accounts->random()->id;
            $member->save();
        });

        Member::factory()->special()->create();
    }

}
