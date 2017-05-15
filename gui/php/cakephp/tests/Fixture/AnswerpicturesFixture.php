<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnswerpicturesFixture
 *
 */
class AnswerpicturesFixture extends TestFixture
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
        'answer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'picture_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'ix_answerpictures_answer_id' => ['type' => 'index', 'columns' => ['answer_id'], 'length' => []],
            'ix_answerpictures_picture_id' => ['type' => 'index', 'columns' => ['picture_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ux_answerpictures' => ['type' => 'unique', 'columns' => ['answer_id', 'picture_id'], 'length' => []],
            'fk_answerpictures_answers' => ['type' => 'foreign', 'columns' => ['answer_id'], 'references' => ['answers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_answerpictures_pictures' => ['type' => 'foreign', 'columns' => ['picture_id'], 'references' => ['pictures', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'answer_id' => 1,
            'picture_id' => 1
        ],
    ];
}
