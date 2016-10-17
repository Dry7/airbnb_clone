<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Helpers\StringHelper;

class StringHelperTest extends TestCase
{
    /**
     * Test terms 2 url - Lipetsk
     *
     * @return void
     */
    public function testTerms2UrlLipetsk()
    {
        $terms = [
            (object)['value' => 'Lipetsk'],
            (object)['value' => 'Lipetsk Oblast'],
            (object)['value' => 'Russia']
        ];

        $this->assertEquals(StringHelper::terms2url($terms), 'Lipetsk--Lipetsk-Oblast--Russia');
    }

    /**
     * Test terms 2 url - NewYork
     *
     * @return void
     */
    public function testTerms2UrlNewYork()
    {
        $terms = [
            (object)['value' => 'New York'],
            (object)['value' => 'NY'],
            (object)['value' => 'United States']
        ];

        $this->assertEquals(StringHelper::terms2url($terms), 'New-York--NY--United-States');
    }


    /**
     * Test terms 2 url - Empty
     *
     * @return void
     */
    public function testTerms2UrlEmpty()
    {
        $terms = [];

        $this->assertEquals(StringHelper::terms2url($terms), '');
    }
}
