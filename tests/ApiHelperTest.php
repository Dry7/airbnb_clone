<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiHelperTest extends TestCase
{
    /**
     * Test /api/v1/help/search
     *
     * @return void
     */
    public function testSearch()
    {
        $this
            ->visit('/api/v1/help/search')
            ->seeJsonStructure([
                '*' => [
                    'name', 'url'
                ]
            ]);
    }

    /**
     * Test /api/v1/help/categories
     *
     * @return void
     */
    public function testCategories()
    {
        $this
            ->visit('/api/v1/help/categories')
            ->seeJsonStructure([
                '*' => [
                    'name'
                ]
            ]);
    }

    /**
     * Test /api/v1/help/suggested
     *
     * @return void
     */
    public function testSuggested()
    {
        $this
            ->visit('/api/v1/help/suggested')
            ->seeJsonStructure([
                '*' => [
                    'name', 'url'
                ]
            ]);
    }

    /**
     * Test /api/v1/help/popular
     *
     * @return void
     */
    public function testPopular()
    {
        $this
            ->visit('/api/v1/help/popular')
            ->seeJsonStructure([
                '*' => [
                    'name', 'url'
                ]
            ]);
    }

    /**
     * Test /api/v1/help/topic
     *
     * @return void
     */
    public function testTopic()
    {
        $this
            ->visit('/api/v1/help/topic/1')
            ->seeJsonStructure([
                '*' => [
                    'name', 'url'
                ]
            ]);
    }

    /**
     * Test /api/v1/help/11
     *
     * @return void
     */
    public function testDetails()
    {
        $this
            ->visit('/api/v1/help/11')
            ->seeJsonStructure([
                'id', 'name', 'url', 'description'
            ]);
    }
}
