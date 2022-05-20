<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'  => 'Автор неизвестен',
                'email' => 'author_unknown@go.go',
                'password' => bcrypt(Str::random(16)),
            ],
            [
                'name'  => 'Автор',
                'email' => 'author@go.go',
                'password' => bcrypt(1545),
            ]
        ];

        DB::table('users')->insert($data);
    }
}
