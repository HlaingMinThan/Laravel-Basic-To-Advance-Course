<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>Category::factory(),//1
            'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'intro'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
            'user_id'=>User::factory()//1
        ];
    }
}
