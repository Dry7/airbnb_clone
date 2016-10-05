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
}
