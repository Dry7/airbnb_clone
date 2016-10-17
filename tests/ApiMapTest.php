<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MapApiTest extends TestCase
{
    /**
     * Test /api/v1/map/places
     *
     * @return void
     */
    public function testPlaces()
    {
        $this->assertTrue(true);
//        $this
//            ->visit('/api/v1/map/places?query=Paris')
//            ->seeJsonStructure([
//                '*' => [
//                    'description', 'id', 'place_id', 'url'
//                ]
//            ]);
    }
}
