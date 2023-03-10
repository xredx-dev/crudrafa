<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Summary of ExampleTest
 */
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function list_of_post()
    {
        //Entender mejor el error dentro de la consola
        $this->withoutExceptionHandling();

        $response = $this->get('/api/tareas');
        $response->assertOk();
    }

    /**
     * Summary of post_title_is_required
     * @return void
     */
    public function post_title_is_required(){
        $this->withoutExceptionHandling();

        $response = $this->post('/api/tareas',[
            'nombre_tarea' =>'',
            'description' =>'hello',
            'status'=>'active'
        ]);

        $response->assertSessionHasErrors(['nombre_tarea']);

    }

    public function post_description_is_required(){
        $this->withoutExceptionHandling();

        $response = $this->post('/api/tareas',[
            'nombre_tarea' =>'title',
            'description' =>'',
            'status'=>'active'
        ]);

        $response->assertSessionHasErrors(['description']);

    }

    public function post_status_is_required(){
        $this->withoutExceptionHandling();

        $response = $this->post('/api/tareas',[
            'nombre_tarea' =>'title',
            'description' =>'description',
            'status'=>''
        ]);

        $response->assertSessionHasErrors(['status']);

    }
}
