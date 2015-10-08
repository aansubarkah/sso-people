<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departement Entity.
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property \App\Model\Entity\Departement $parent_departement
 * @property int $lft
 * @property int $rght
 * @property string $description
 * @property string $address
 * @property bool $active
 * @property \App\Model\Entity\Departement[] $child_departements
 * @property \App\Model\Entity\Usercareerview[] $usercareerviews
 * @property \App\Model\Entity\Userdepartementview[] $userdepartementviews
 * @property \App\Model\Entity\Chief[] $chiefs
 * @property \App\Model\Entity\User[] $users
 */
class Departement extends Entity
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
