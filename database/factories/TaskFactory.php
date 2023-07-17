<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = Category::all()->random();
        $usersId = $categories->user;
        
        return [
            'title' => $this->faker->text(20),
            'due_date' => $this->faker->dateTime(),
            'description' => $this->faker->text(100),
            'category_id' =>  $categories,
            'user_id' => $usersId,
        ];
    }
}
