<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('categories')->delete();
        
        DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'category_name' => 'Work',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'category_id' => 2,
                'category_name' => 'Computers',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'category_id' => 4,
                'category_name' => 'Car',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'category_id' => 7,
                'category_name' => 'Relationship',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'category_id' => 9,
                'category_name' => 'Diet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'category_id' => 10,
                'category_name' => 'Anniversary',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'category_id' => 11,
                'category_name' => 'Science',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'category_id' => 14,
                'category_name' => 'Medical',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'category_id' => 16,
                'category_name' => 'Christmas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'category_id' => 17,
                'category_name' => 'Experience',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'category_id' => 18,
                'category_name' => 'Government',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'category_id' => 20,
                'category_name' => 'Sympathy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'category_id' => 21,
                'category_name' => 'Best',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'category_id' => 22,
                'category_name' => 'Faith',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'category_id' => 23,
                'category_name' => 'Courage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'category_id' => 24,
                'category_name' => 'Easter',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'category_id' => 25,
                'category_name' => 'Environmental',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'category_id' => 27,
                'category_name' => 'Inspirational',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'category_id' => 28,
                'category_name' => 'Attitude',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'category_id' => 30,
                'category_name' => 'Failure',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'category_id' => 32,
                'category_name' => 'Leadership',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'category_id' => 33,
                'category_name' => 'Design',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'category_id' => 35,
                'category_name' => 'Forgiveness',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'category_id' => 36,
                'category_name' => 'Religion',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'category_id' => 39,
                'category_name' => 'Birthday',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'category_id' => 40,
                'category_name' => 'Music',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'category_id' => 41,
                'category_name' => 'Age',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'category_id' => 44,
                'category_name' => 'Alone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'category_id' => 45,
                'category_name' => 'Amazing',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'category_id' => 47,
                'category_name' => 'Success',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'category_id' => 48,
                'category_name' => 'Marriage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'category_id' => 49,
                'category_name' => 'Art',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'category_id' => 50,
                'category_name' => 'Happiness',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'category_id' => 51,
                'category_name' => 'Health',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'category_id' => 52,
                'category_name' => 'Brainy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'category_id' => 54,
                'category_name' => 'Cool',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'category_id' => 55,
                'category_name' => 'Intelligence',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'category_id' => 57,
                'category_name' => 'Trust',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'category_id' => 58,
                'category_name' => 'MovingOn',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'category_id' => 59,
                'category_name' => 'Architecture',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'category_id' => 61,
                'category_name' => 'Dreams',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'category_id' => 62,
                'category_name' => 'FathersDay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'category_id' => 63,
                'category_name' => 'SaintPatricksDay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'category_id' => 64,
                'category_name' => 'Fear',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'category_id' => 67,
                'category_name' => 'Chance',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'category_id' => 68,
                'category_name' => 'Travel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'category_id' => 69,
                'category_name' => 'Graduation',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'category_id' => 70,
                'category_name' => 'Jealousy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'category_id' => 72,
                'category_name' => 'Beauty',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'category_id' => 73,
                'category_name' => 'War',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'category_id' => 75,
                'category_name' => 'Dating',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'category_id' => 76,
                'category_name' => 'Gardening',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'category_id' => 77,
                'category_name' => 'Movies',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'category_id' => 78,
                'category_name' => 'VeteransDay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'category_id' => 81,
                'category_name' => 'Communication',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'category_id' => 82,
                'category_name' => 'Great',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'category_id' => 83,
                'category_name' => 'Anger',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'category_id' => 85,
                'category_name' => 'God',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'category_id' => 87,
                'category_name' => 'Favorite',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'category_id' => 89,
                'category_name' => 'Power',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'category_id' => 90,
                'category_name' => 'Society',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'category_id' => 91,
                'category_name' => 'Experience',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'category_id' => 92,
                'category_name' => 'Home',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'category_id' => 94,
                'category_name' => 'Education',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'category_id' => 95,
                'category_name' => 'Dad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'category_id' => 97,
                'category_name' => 'MemorialDay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'category_id' => 99,
                'category_name' => 'Wedding',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'category_id' => 100,
                'category_name' => 'Family',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}