<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $product = [
            "productName"=>"Lux",
            "title"=>"Soap",
            "mrp"=>"23",
            "description"=>"This is testing soap",
            "status"=>1
        ];
        Products::create($product);
    }
}
