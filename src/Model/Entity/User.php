<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $number
 * @property string $oldnumber
 * @property string $cardnumber
 * @property string $name
 * @property string $fullname
 * @property \Cake\I18n\Time $birthdate
 * @property string $birthplace
 * @property bool $sex
 * @property bool $active
 * @property \App\Model\Entity\Chief[] $chiefs
 * @property \App\Model\Entity\Usercareerview[] $usercareerviews
 * @property \App\Model\Entity\Userdepartementview[] $userdepartementviews
 * @property \App\Model\Entity\Usereducationview[] $usereducationviews
 * @property \App\Model\Entity\Userlevelview[] $userlevelviews
 * @property \App\Model\Entity\Userroleview[] $userroleviews
 * @property \App\Model\Entity\Departement[] $departements
 * @property \App\Model\Entity\Education[] $educations
 * @property \App\Model\Entity\Level[] $levels
 * @property \App\Model\Entity\Role[] $roles
 * @property \App\Model\Entity\Positionlevel[] $positionlevels
 * @property \App\Model\Entity\Position[] $positions
 */
class User extends Entity
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

    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
}
