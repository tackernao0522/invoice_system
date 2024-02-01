<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estimate>
 */
class EstimateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::count() > 0 ? rand(1, Customer::count()) : null,
            'amount' => $this->faker->randomFloat(2, 10, 1000), // 10から1000までのランダムな金額
            'expiration_date' => $this->faker->dateTimeBetween('-1 year', 'now'), // 一年前から現在までのランダムな日付
            'status' => $this->faker->randomElement(['draft', 'sent', 'accepted', 'rejected']), // ランダムなステータス
        ];
    }
}
