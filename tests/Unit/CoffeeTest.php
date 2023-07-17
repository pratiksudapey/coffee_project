<?php

namespace Tests\Unit;

use App\Models\Coffee;
use App\Models\User;
use Faker\Factory;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;
// use PHPUnit\Framework\TestCase;

class CoffeeTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_create_coffee_order(): void
    {
        $response = $this->post(route('coffee.store'), [
            'id' => 1,
            'name' => 'ingredients',
            'quantity' => '1',
            'description' => 'ingredients ingredients ingredients',
        ]);
        $response->assertSessionHasNoErrors();

    }

    public function test_database()
    {
        $this->assertDatabaseHas('coffees',
        [
            'name' => 'Black Coffee'
        ]);

    }


}
