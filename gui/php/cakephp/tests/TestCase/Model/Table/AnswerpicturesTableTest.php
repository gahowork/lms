<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnswerpicturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnswerpicturesTable Test Case
 */
class AnswerpicturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnswerpicturesTable
     */
    public $Answerpictures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.answerpictures',
        'app.answers',
        'app.pictures'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Answerpictures') ? [] : ['className' => 'App\Model\Table\AnswerpicturesTable'];
        $this->Answerpictures = TableRegistry::get('Answerpictures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Answerpictures);

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
