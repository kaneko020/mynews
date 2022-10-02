<?php

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'name' => 'テストアカウント１',
                'gender' => '男性',
                'hobby' => '野球',
                'introduction' => 'ベイスターズファンです',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'テストアカウント２',
                'gender' => '女性',
                'hobby' => '犬と散歩',
                'introduction' => 'パグを飼っています',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
