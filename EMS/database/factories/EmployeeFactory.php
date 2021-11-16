<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;




class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'firstname' => $this->faker->name(),
            'lastname' =>$this->faker->lastname(),
            
            'Companies' =>$this->faker->word() , 
            'phone' => $this->faker->numberBetween(1000000000,9999999999),
            'email'=>$this->faker->email(),
        ];
    }
}
