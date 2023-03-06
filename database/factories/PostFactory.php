<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'logo' => $this->faker->title,
            'banner' => $this->faker->text,
            'name' => $this->faker->text,
            'title' => $this->faker->text,
            'description' => $this->faker->text,
            'country' => $this->faker->text,
            'city' => $this->faker->text,
            'user_name' => $this->faker->text,
            'date' => $this->faker->text,
        ];
    }
}
