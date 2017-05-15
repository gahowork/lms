<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdventurequestionsFixture
 *
 */
class AdventurequestionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'adventure_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'question_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'ix_adventurequestions_adventure_id' => ['type' => 'index', 'columns' => ['adventure_id'], 'length' => []],
            'ix_adventurequestions_question_id' => ['type' => 'index', 'columns' => ['question_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ux_adventurequestions' => ['type' => 'unique', 'columns' => ['adventure_id', 'question_id'], 'length' => []],
            'fk_adventurequestions_adventures' => ['type' => 'foreign', 'columns' => ['adventure_id'], 'references' => ['adventures', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_adventurequestions_questions' => ['type' => 'foreign', 'columns' => ['question_id'], 'references' => ['questions', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'created' => 1494877041,
            'adventure_id' => 1,
            'question_id' => 1
        ],
    ];
}
