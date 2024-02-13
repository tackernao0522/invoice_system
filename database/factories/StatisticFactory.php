<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statistic>
 */
class StatisticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customerId = Customer::inRandomOrder()->value('id');
        $employeeId = Employee::inRandomOrder()->value('id');

        return [
            'customer_id' => $customerId,
            'employee_id' => $employeeId,
            'sales_amount' => $this->faker->randomNumber(4), // ランダムな売り上げ金額
            'date' => $this->faker->date(), // ランダムな日付
        ];
    }
}
