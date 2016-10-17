<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdsApiTest extends TestCase
{
    /**
     * Test /api/v1/ads/search
     *
     * @return void
     */
    public function testSearch()
    {
        $this
            ->visit('/api/v1/ads/search')
            ->seeJsonStructure([
                '*' => [
                    'id', 'name', 'type', 'url', 'price', 'guests', 'reviews', 'rating',
                    'author' => [
                        'id', 'name', 'url', 'image', 'is_superhost', 'is_suitcase'
                    ],
                    'images'
                ]
            ]);
    }
}
