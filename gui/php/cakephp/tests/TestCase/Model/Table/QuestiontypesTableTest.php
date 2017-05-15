<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestiontypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestiontypesTable Test Case
 */
class QuestiontypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestiontypesTable
     */
    public $Questiontypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questiontypes',
        'app.questions',
        'app.adventurequestions',
        'app.adventures',
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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Questiontypes') ? [] : ['className' => 'App\Model\Table\QuestiontypesTable'];
        $this->Questiontypes = TableRegistry::get('Questiontypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Questiontypes);

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
