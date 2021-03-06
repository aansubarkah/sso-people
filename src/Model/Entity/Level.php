<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Level Entity.
 *
 * @property int $id
 * @property int $positionlevel_id
 * @property \App\Model\Entity\Positionlevel $positionlevel
 * @property string $name
 * @property string $description
 * @property bool $active
 * @property \App\Model\Entity\Usercareerview[] $usercareerviews
 * @property \App\Model\Entity\Userlevelview[] $userlevelviews
 * @property \App\Model\Entity\User[] $users
 */
class Level extends Entity
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
