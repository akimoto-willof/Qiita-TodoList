<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bodys = ['laravelの勉強をする','フロントの勉強をする','電車で帰る'];
        foreach ($bodys as $body) {
            DB::table('todos')->insert([
                'body' => $body,
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ]);
        }
    }
}
