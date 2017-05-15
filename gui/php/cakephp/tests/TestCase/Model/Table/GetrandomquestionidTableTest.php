<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GetrandomquestionidTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GetrandomquestionidTable Test Case
 */
class GetrandomquestionidTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GetrandomquestionidTable
     */
    public $Getrandomquestionid;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.getrandomquestionid'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Getrandomquestionid') ? [] : ['className' => 'App\Model\Table\GetrandomquestionidTable'];
        $this->Getrandomquestionid = TableRegistry::get('Getrandomquestionid', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Getrandomquestionid);

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
}
