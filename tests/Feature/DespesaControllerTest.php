<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DespesaControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_despesa()
    {
        $formData = [
            'description' => 'Compra de material de escritório',
            'value' => 150.50,
            'payment' => 'nubank',
        ];

        $response = $this->postJson('despesas', $formData);

        $response->assertStatus(201)
                 ->assertJson($formData);

        $this->assertDatabaseHas('despesas', $formData);
    }
}
