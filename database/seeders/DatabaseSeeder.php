<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Category;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        Author::factory(15)->has(
            Quote::factory()->hasAttached(
               // ->hasCategories(
               Category::factory()->count(4)
            )->count(2)
        )->create();

        //Quote::factory()
        //->hasCategories(1)
        //->create();

        //    $this->call(CategoriesTableSeeder::class);

       // Quote::factory(100)->create();
        //Author::factory(100)->create();
        //Author::factory()
        //    ->count(20)
        //    ->hasQuotes(5)
        //    ->create();

        //Quote::factory(20)
        //    ->hasAuthors()
        //    ->hasCategories()
        //    ->create();

            // Quote::factory(10)
            // ->hasAuthors()
            // ->hasCategories(4)
            // ->create();

            // Quote::factory(5)
            // ->hasAuthors()
            // ->hasCategories(3)
            // ->create();

        // $categories = Category::all();

        //  Quote::all()->each(function ($quote) use ($categories) {
        //     $quote->categories()->attach(
        //         $categories->random(rand(1, 5))->pluck('id')->toArray()
        //     );     
        // });



        //Author::factory(20)->has(
        //    Quote::factory(3)->attach(
        //        Category::factory()->random(rand(1, 5))->pluck('id')->toArray()
        //    )->count(4)
        //)->create();
        //    $this->call(CategoriesTableSeeder::class);

        //$this->call([
        //    CategorySeeder::class
        //]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
