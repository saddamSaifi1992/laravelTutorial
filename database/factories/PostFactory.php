<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
         
        return [
            'title' => $this->faker->sentence(8),
            'content' => $this->faker->text(300),
            'user_id' => User::inRandomOrder()->first()->id, 
        ];
    }
}
