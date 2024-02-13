<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'type' => $this->faker->word,
            'notifiable_type' => $this->faker->word,
            'notifiable_id' => function () {
                return User::factory()->create()->id;
            },
            'data' => $this->faker->sentence,
            'read_at' => $this->faker->optional()->dateTime(),
            'title' => $this->faker->sentence,
        ];
    }
}
