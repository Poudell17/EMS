<?php

namespace Database\Factories;

use App\Models\Companie;
use Illuminate\Database\Eloquent\Factories\Factory;




class CompanieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Companie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'Companies' => $this->faker->name(),
            
            'logo' =>$this->faker->image(),
            'website' =>$this->faker->domainName() , 
            'phone' => $this->faker->numberBetween(1000000000,9999999999),
            'email'=>$this->faker->email(),
        ];
    }
}
