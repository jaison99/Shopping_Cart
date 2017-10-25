<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $sizes					        = array("16GB","32GB", "64GB", "128GB", "8GB");
       $cherryMobile_items		= array("flareXL","plus","cosmos", "p1", "j1");
       $samsung_items    	  	= array("s5","s6","s7edge","s8","note8");
       $oppo_items				    = array("f15","neo7","a37","a39f","neo5");
       $azus_items				    = array("zenfone3","zenfone4","zenfoneselfie","zenfonezoom","zenfonemax");
       $iphone_items			    =array("iphone5","iphone6","iphone7","iphone7+","iphone8");

       for($b=0;$b<5;$b++){
       		for($c=0;$c<5;$c++){

       			DB::table('products')->insert([

       					'name' => $cherryMobile_items[$b],
       					'description' => $sizes[$c],
       					'category_id' =>"1",
       					'barcode' =>str_random(10),
       					'created_at' => carbon::now()

       				]);
       		}
       		echo ", ";
       }
       echo "\n";
    
    for($b=0;$b<5;$b++){
       		for($c=0;$c<5;$c++){

       			DB::table('products')->insert([

       					'name' => $samsung_items[$b],
       					'description' => $sizes[$c],
       					'category_id' => "2",
       					'barcode' => str_random(10),
       					'created_at' => carbon::now()

       				]);
       		}
       		echo ", ";
       }
       echo "\n";
    
    for($b=0;$b<5;$b++){
       		for($c=0;$c<5;$c++){

       			DB::table('products')->insert([

       					'name' => $oppo_items[$b],
       					'description' => $sizes[$c],
       					'category_id' => "3",
       					'barcode' =>str_random(10),
       					'created_at' => carbon::now()

       				]);
       		}
       		echo ", ";
       }
       echo "\n";
    
    for($b=0;$b<5;$b++){
       		for($c=0;$c<5;$c++){

       			DB::table('products')->insert([

       					'name' => $azus_items[$b],
       					'description' => $sizes[$c],
       					'category_id' =>"4",
       					'barcode' => str_random(10),
       					'created_at' => carbon::now()

       				]);
       		}
       		echo ", ";
       }
       echo "\n";
    
    for($b=0;$b<5;$b++){
       		for($c=0;$c<5;$c++){

       			DB::table('products')->insert([

       					'name' => $iphone_items[$b],
       					'description' => $sizes[$c],
       					'category_id' => "5",
       					'barcode' =>str_random(10),
       					'created_at' => carbon::now()

       				]);
       		}
       		echo ", ";
       }
       


}

}
