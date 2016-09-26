<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert(array(
            array('card_id'=>'1','body'=>'Hello hello1'),
            array('card_id'=>'2','body'=>'Hello hello2'),
            array('card_id'=>'3','body'=>'Hello hello3'),
            array('card_id'=>'3','body'=>'Hello hello3'),


        ));
    }
}
