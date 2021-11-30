<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\RemaSignoVital;

class RemaSignoVitalApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_rema_signo_vital()
    {
        $remaSignoVital = factory(RemaSignoVital::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/rema_signo_vitals', $remaSignoVital
        );

        $this->assertApiResponse($remaSignoVital);
    }

    /**
     * @test
     */
    public function test_read_rema_signo_vital()
    {
        $remaSignoVital = factory(RemaSignoVital::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/rema_signo_vitals/'.$remaSignoVital->id
        );

        $this->assertApiResponse($remaSignoVital->toArray());
    }

    /**
     * @test
     */
    public function test_update_rema_signo_vital()
    {
        $remaSignoVital = factory(RemaSignoVital::class)->create();
        $editedRemaSignoVital = factory(RemaSignoVital::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/rema_signo_vitals/'.$remaSignoVital->id,
            $editedRemaSignoVital
        );

        $this->assertApiResponse($editedRemaSignoVital);
    }

    /**
     * @test
     */
    public function test_delete_rema_signo_vital()
    {
        $remaSignoVital = factory(RemaSignoVital::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/rema_signo_vitals/'.$remaSignoVital->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/rema_signo_vitals/'.$remaSignoVital->id
        );

        $this->response->assertStatus(404);
    }
}
