<?php

namespace Database\Factories;

use App\Models\Quote;
use App\Models\Category;
use Database\Seeders\CategoriesTableSeeder;
use PhpParser\Node\NullableType;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Extension\SmartPunct\QuoteProcessor;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        // $categories = Category::class();

        //DB::table('categories')->pluck('category_name');




        //   Quote::all()->each(function ($quote) use ($categories) {
        //       $quote->categories()->attach(
        //           $categories->random(rand(1, 5))->pluck('category_')->toArray()
        //     );     
        // });

        $category = $this->faker->randomElement(['Age', 'Alone', 'Amazing',
        'Anger',
        'Anniversary',
        'Architecture',
        'Art',
        'Attitude',
        'Beauty',
        'Best',
        'Birthday',
        'Brainy',
        'Business',
        'Car',
        'Chance',
        'Change',
        'Christmas',
        'Communication',
        'Computers',
        'Cool',
        'Courage',
        'Dad',
        'Dating',
        'Death',
        'Design',
        'Diet',
        'Dreams',
        'Easter',
        'Education',
        'Environmental',
        'Equality',
        'Experience',
        'Experience',
        'Failure',
        'Faith',
        'Family',
        'Famous',
        'Fathers Day',
        'Fear',
        'Finance',
        'Fitness',
        'Food',
        'Forgiveness',
        'Freedom',
        'Friendship',
        'Funny',
        'Future',
        'Gardening',
        'God',
        'Good',
        'Government',
        'Graduation',
        'Great',
        'Happiness',
        'Health',
        'History',
        'Home',
        'Hope',
        'Humor',
        'Imagination',
        'Independence',
        'Inspirational',
        'Intelligence',
        'Jealousy',
        'Jealousy',
        'Knowledge',
        'Leadership',
        'Learning',
        'Legal',
        'Life',
        'Love',
        'Marriage',
        'Medical',
        'Memorial Day',
        'Men',
        'Mom',
        'Money',
        'Morning',
        'Mothers Day',
        'Motivational',
        'Movies',
        'Moving',
        'Music',
        'Nature',
        'New Years',
        'Parenting',
        'Patience',
        'Patriotism',
        'Peace',
        'Pet',
        'Poetry',
        'Politics',
        'Positive',
        'Power',
        'Relationship',
        'Religion',
        'Religion',
        'Respect',
        'Romantic',
        'Sad',
        'Saint Patricks Day',
        'Science',
        'Smile',
        'Society',
        'Space',
        'Sports',
        'Strength',
        'Success',
        'Sympathy',
        'Teacher',
        'Technology',
        'Teen',
        'Thankful',
        'Thanksgiving',
        'Time',
        'Travel',
        'Trust',
        'Truth',
        'Valentines Day',
        'Veterans Day',
        'War',
        'Wedding',
        'Wisdom',
        'Women',
        'Work']);
 
        return [
            'category_name' => $category
   
        ];
    }
}
