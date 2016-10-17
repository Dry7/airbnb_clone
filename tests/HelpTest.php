<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelpTest extends TestCase
{
    /**
     * Test /api/v1/help/categories
     *
     * @return void
     */
    public function testCategories()
    {
        $this->visit('/api/v1/help/categories')
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
        $this->visit('/api/v1/help/suggested')
            ->seeJsonStructure([
                '*' => [
                    'id', 'name', 'url'
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
        $this->visit('/api/v1/help/popular')
            ->seeJsonStructure([
                '*' => [
                    'id', 'icon', 'name', 'url'
                ]
            ]);
    }
}
