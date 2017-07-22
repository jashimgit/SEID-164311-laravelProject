<?php

use Illuminate\Database\Seeder;

class Booktitle_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=50; $i++){

            DB::table('booktitles')->insert([
                'booktitle'=> str_random(4),
                'authorname'=> str_random(3)
            ]);
        }
    }
}
