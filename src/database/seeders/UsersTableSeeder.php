<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '管理　太郎',
            'email' => 'aaa@jp',
            'password' => '123456789',
            'role' => 'admin'
        ];
        DB::table('users')->insert($param);
    }
}
