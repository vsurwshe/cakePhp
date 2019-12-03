<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Custtable Entity
 *
 * @property int $id
 * @property int $food_id
 * @property int $tableNo
 * @property int $qty
 * @property float $price
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Food $food
 */
class Custtable extends Entity
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
        'food_id' => true,
        'tableNo' => true,
        'qty' => true,
        'price' => true,
        'created' => true,
        'modified' => true,
        'food' => true
    ];
}
