<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Todo;
use App\Models\Todo as Todo_Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\User;

class TodoTest extends TestCase
{
    /** @test */
    public function open_todo_page()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response = $this->get('/dashboard');
        $response->assertStatus(200);
    }

    /** @test */
    public function todo_can_render()
    {
        $component = Livewire::test(Todo::class);

        $component->assertStatus(200);
    }

    /** @test  */
    function can_create_todo()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        
        Livewire::test(Todo::class)
            ->set('title', 'hoolaaa')
            ->call('save');

        $this->assertTrue(Todo_Model::where('title','hoolaaa')->exists());
    }
}
