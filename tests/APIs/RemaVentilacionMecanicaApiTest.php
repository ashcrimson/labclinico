<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\RemaVentilacionMecanica;

class RemaVentilacionMecanicaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_rema_ventilacion_mecanica()
    {
        $remaVentilacionMecanica = factory(RemaVentilacionMecanica::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/rema_ventilacion_mecanicas', $remaVentilacionMecanica
        );

        $this->assertApiResponse($remaVentilacionMecanica);
    }

    /**
     * @test
     */
    public function test_read_rema_ventilacion_mecanica()
    {
        $remaVentilacionMecanica = factory(RemaVentilacionMecanica::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/rema_ventilacion_mecanicas/'.$remaVentilacionMecanica->id
        );

        $this->assertApiResponse($remaVentilacionMecanica->toArray());
    }

    /**
     * @test
     */
    public function test_update_rema_ventilacion_mecanica()
    {
        $remaVentilacionMecanica = factory(RemaVentilacionMecanica::class)->create();
        $editedRemaVentilacionMecanica = factory(RemaVentilacionMecanica::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/rema_ventilacion_mecanicas/'.$remaVentilacionMecanica->id,
            $editedRemaVentilacionMecanica
        );

        $this->assertApiResponse($editedRemaVentilacionMecanica);
    }

    /**
     * @test
     */
    public function test_delete_rema_ventilacion_mecanica()
    {
        $remaVentilacionMecanica = factory(RemaVentilacionMecanica::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/rema_ventilacion_mecanicas/'.$remaVentilacionMecanica->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/rema_ventilacion_mecanicas/'.$remaVentilacionMecanica->id
        );

        $this->response->assertStatus(404);
    }
}
