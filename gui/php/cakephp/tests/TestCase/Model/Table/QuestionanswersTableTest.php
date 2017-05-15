<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionanswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionanswersTable Test Case
 */
class QuestionanswersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionanswersTable
     */
    public $Questionanswers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questionanswers',
        'app.questions',
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
        $config = TableRegistry::exists('Questionanswers') ? [] : ['className' => 'App\Model\Table\QuestionanswersTable'];
        $this->Questionanswers = TableRegistry::get('Questionanswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Questionanswers);

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
