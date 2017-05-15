<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdventuresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdventuresTable Test Case
 */
class AdventuresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdventuresTable
     */
    public $Adventures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adventures',
        'app.adventurequestions',
        'app.questions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Adventures') ? [] : ['className' => 'App\Model\Table\AdventuresTable'];
        $this->Adventures = TableRegistry::get('Adventures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adventures);

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
