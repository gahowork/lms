<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GamehistoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GamehistoriesTable Test Case
 */
class GamehistoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GamehistoriesTable
     */
    public $Gamehistories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gamehistories',
        'app.games',
        'app.questionanswers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gamehistories') ? [] : ['className' => 'App\Model\Table\GamehistoriesTable'];
        $this->Gamehistories = TableRegistry::get('Gamehistories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gamehistories);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
