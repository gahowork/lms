<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdventurequestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdventurequestionsTable Test Case
 */
class AdventurequestionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdventurequestionsTable
     */
    public $Adventurequestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adventurequestions',
        'app.adventures',
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
        $config = TableRegistry::exists('Adventurequestions') ? [] : ['className' => 'App\Model\Table\AdventurequestionsTable'];
        $this->Adventurequestions = TableRegistry::get('Adventurequestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adventurequestions);

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
