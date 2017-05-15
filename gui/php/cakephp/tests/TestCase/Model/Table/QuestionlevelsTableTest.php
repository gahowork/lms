<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionlevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionlevelsTable Test Case
 */
class QuestionlevelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionlevelsTable
     */
    public $Questionlevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questionlevels',
        'app.questions',
        'app.levels',
        'app.pictures',
        'app.answerpictures',
        'app.answers',
        'app.questionanswers',
        'app.categories',
        'app.questioncategories',
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
        $config = TableRegistry::exists('Questionlevels') ? [] : ['className' => 'App\Model\Table\QuestionlevelsTable'];
        $this->Questionlevels = TableRegistry::get('Questionlevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Questionlevels);

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
