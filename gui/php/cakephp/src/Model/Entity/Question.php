<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $created
 * @property string $header
 * @property string $description
 * @property int $questiontype_id
 *
 * @property \App\Model\Entity\Questiontype $questiontype
 * @property \App\Model\Entity\Adventurequestion[] $adventurequestions
 * @property \App\Model\Entity\Questionanswer[] $questionanswers
 * @property \App\Model\Entity\Questioncategory[] $questioncategories
 * @property \App\Model\Entity\Questionlevel[] $questionlevels
 * @property \App\Model\Entity\Questionpicture[] $questionpictures
 */
class Question extends Entity
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
