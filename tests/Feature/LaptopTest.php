<?php

namespace Tests\Feature;

use App\Models\Laptop;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LaptopTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_paginated_laptops_shouldnt_have_13th_record(): void
    {
        $laptop13 = Laptop::where('name', 'Laptop Lenovo V14 G4 IRU 83A000BGVN')->first();
        $response = $this->get('/laptops/Gaming');

        $response->assertStatus(200);
        
        $gamingLaptops = $response->original->getData()['gamingLaptops'];

        $this->assertCount(12, $gamingLaptops);

        $this->assertFalse($gamingLaptops->contains('name', $laptop13->name));
    }

    public function test_laptops_should_have_27_records(): void
    {
        $this->assertDatabaseCount('laptops', 27);
    }
}
