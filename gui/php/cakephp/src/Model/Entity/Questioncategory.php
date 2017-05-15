<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Questioncategory Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $created
 * @property int $question_id
 * @property int $category_id
 *
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\Category $category
 */
class Questioncategory extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
