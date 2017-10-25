<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class product_price_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price_sizes = array("16GB","32GB", "64GB", "128GB", "8GB");
        $price_cherryMobile_items=array("4000.00","7000.00","6000.00", "9000.00", "7000.00");
        $price_samsung_items=array("15000.00","12000.00","10000.00","14000.00","16000.00");
        $price_oppo_items=array("12000.00","23000.00","16000.00","22000.00","24000.00");
        $price_azus_items=array("15000.00","26000.00","18000.00","26000.00","23000.00");
        $price_iphone_items=array("500000.00","30000.00","36000.00","40000.00","36000.00");


        for($a=0;$a<5;$a++){
        	DB::table('product_prices')->insert([
        		'id' 				=>	$a+1,
        		'descriptions' 		=>	$price_sizes[$a],
        		'price' 			=>	$price_cherryMobile_items[$a],
        		'created_at' 		=> 	Carbon::now() 
        		 ]);
        }
        for($a=0;$a<5;$a++){
        	DB::table('product_prices')->insert([
        		'id' => $a+6,
        		'descriptions' =>$price_sizes[$a],
        		'price' => $price_oppo_items[$a],
        		'created_at' => Carbon::now()

        		]);
        	}
        	for($a=0;$a<5;$a++){
        	DB::table('product_prices')->insert([
        		'id' => $a+11,
        		'descriptions' =>$price_sizes[$a],
        		'price' => $price_samsung_items[$a],
        		'created_at' => Carbon::now()
        		]);
        	}
        	for($a=0;$a<5;$a++){
        	DB::table('product_prices')->insert([
        		'id' => $a+16,
        		'descriptions' =>$price_sizes[$a],
        		'price' => $price_azus_items[$a],
        		'created_at' => Carbon::now()
        		]);
        	}
        	for($a=0;$a<5;$a++){
        	DB::table('product_prices')->insert([
        		'id' => $a+21,
        		'descriptions' =>$price_sizes[$a],
        		'price' => $price_iphone_items[$a],
        		'created_at' => Carbon::now()
        		]);
        	}





    }
   		
}
