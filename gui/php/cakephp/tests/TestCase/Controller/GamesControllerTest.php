<?php
namespace App\Test\TestCase\Controller;

use App\Controller\GamesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\GamesController Test Case
 */
class GamesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.games',
        'app.users',
        'app.usergroups',
        'app.gamehistories',
        'app.questionanswers',
        'app.questions',
        'app.questiontypes',
        'app.adventurequestions',
        'app.adventures',
        'app.questioncategories',
        'app.categories',
        'app.pictures',
        'app.answerpictures',
        'app.answers',
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
