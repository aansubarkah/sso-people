<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ChiefsDepartement Entity.
 *
 * @property int $id
 * @property int $chief_id
 * @property \App\Model\Entity\Chief $chief
 * @property int $departement_id
 * @property \App\Model\Entity\Departement $departement
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property bool $active
 */
class ChiefsDepartement extends Entity
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
        'id' => false,
    ];
}
