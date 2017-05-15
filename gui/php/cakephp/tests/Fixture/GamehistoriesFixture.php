<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GamehistoriesFixture
 *
 */
class GamehistoriesFixture extends TestFixture
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
        'game_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'questionanswers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'ix_gamehistories_game_id' => ['type' => 'index', 'columns' => ['game_id'], 'length' => []],
            'ix_gamehistories_questionanswers_id' => ['type' => 'index', 'columns' => ['questionanswers_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ux_gamehistory' => ['type' => 'unique', 'columns' => ['game_id', 'questionanswers_id'], 'length' => []],
            'fk_gamehistories_games' => ['type' => 'foreign', 'columns' => ['game_id'], 'references' => ['games', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_gamehistories_questionanswers' => ['type' => 'foreign', 'columns' => ['questionanswers_id'], 'references' => ['questionanswers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'game_id' => 1,
            'questionanswers_id' => 1
        ],
    ];
}
