<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AdventuresController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AdventuresController Test Case
 */
class AdventuresControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adventures',
        'app.adventurequestions',
        'app.questions',
        'app.questiontypes',
        'app.questionanswers',
        'app.answers',
        'app.answerpictures',
        'app.pictures',
        'app.categories',
        'app.questioncategories',
        'app.levels',
        'app.questionlevels',
        'app.questionpictures'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
