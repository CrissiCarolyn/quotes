<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::truncate();

        $json = Storage::get('/categoriestable.json');
        $categories = json_decode($json);


    //if (is_array($categories) || is_object($categories)) {
        foreach ($categories as $key => $value) {
            Category::create([
                "category_id" => $value->id,
                "category_name" => $value->string
            ]);
        }
    }
    //}
}
