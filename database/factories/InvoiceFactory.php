<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
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
            'due_date' => $this->faker->dateTimeBetween('now', '+1 year'), // 現在から1年後までのランダムな日付
            'status' => $this->faker->randomElement(['unpaid', 'paid']), // 'unpaid'または'paid'
        ];
    }
}
