<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionpicturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionpicturesTable Test Case
 */
class QuestionpicturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionpicturesTable
     */
    public $Questionpictures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questionpictures',
        'app.questions',
        'app.pictures',
        'app.answerpictures',
        'app.answers',
        'app.questionanswers',
        'app.categories',
        'app.questioncategories',
        'app.levels',
        'app.questionlevels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Questionpictures') ? [] : ['className' => 'App\Model\Table\QuestionpicturesTable'];
        $this->Questionpictures = TableRegistry::get('Questionpictures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Questionpictures);

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
