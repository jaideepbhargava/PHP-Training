<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserInfo;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "asdfasdf";
        UserInfo::factory()->count(50)->create();
    }
}
