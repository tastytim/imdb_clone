<?php

use Illuminate\Database\Seeder;
use App\Pegi;

class PegisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $pegiList = ['+3', '+4','+6','+10','+18'];


        
            foreach($pegiList as $pegi){
                $newPegi = new Pegi();
                $newPegi->name = $pegi;
                $newPegi->save();
            }
          
    }
}
