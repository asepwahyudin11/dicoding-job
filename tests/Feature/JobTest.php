<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobTest extends TestCase
{
    /**
     * Feature test for job list page.
     *
     * @return void
     */
    public function testJobListPage()
    {
        $response = $this->get('/job/list');

        $response->assertStatus(200);
        $response->assertViewIs('job.list');
        $response->assertSee('Temukan lowongan yang cocok untuk Anda');
        $response->assertViewHasAll([
            'skills',
            'types',
            'cities',
            'experiences',
        ]);
    }

    /**
     * Feature test for job description page.
     *
     * @return void
     */
    public function testJobDescriptionPage()
    {
        $response = $this->get('/job/14/description');

        $response->assertStatus(200);
        $response->assertViewIs('job.description');
        $response->assertSee('Kirim Lamaran');
        $response->assertViewHas('job');
    }
}
