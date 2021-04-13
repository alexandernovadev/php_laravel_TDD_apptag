<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Tag;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    // It should show true because there are data
    public function test_show_data()
    {
        // OJO que me falta factory then no crea nada
        // $tag = Tag::factory()->create([
            //     'name' => 'HOLA MARTE'
            // ]);    
        $tag = factory(Tag::class)->create();
        // $tag = Tag::factory()->create();

        $this
        ->get('/')
        ->assertStatus(200)
        ->assertSee($tag->name)
        ->assertDontSee('No hay elemetos');
    }
    
    // It should show home page
    public function test_empty()
    {
        $this
            ->get('/')
            ->assertStatus(200)
            ->assertSee('No hay elemetos');
    }

    // It should show error because home no exists
    public function test_show_home()
    {
        $response = $this->get('/home');

        $response->assertStatus(500);
    }
}
