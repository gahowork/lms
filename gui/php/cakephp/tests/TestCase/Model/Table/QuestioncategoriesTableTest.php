<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestioncategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestioncategoriesTable Test Case
 */
class QuestioncategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestioncategoriesTable
     */
    public $Questioncategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questioncategories',
        'app.questions',
        'app.categories',
        'app.pictures',
        'app.answerpictures',
        'app.answers',
        'app.questionanswers',
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
        $config = TableRegistry::exists('Questioncategories') ? [] : ['className' => 'App\Model\Table\QuestioncategoriesTable'];
        $this->Questioncategories = TableRegistry::get('Questioncategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Questioncategories);

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
