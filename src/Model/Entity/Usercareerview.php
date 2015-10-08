<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usercareerview Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $number
 * @property string $name
 * @property bool $active
 * @property int $userlevelid
 * @property int $level_id
 * @property \App\Model\Entity\Level $level
 * @property \Cake\I18n\Time $levelstart
 * @property \Cake\I18n\Time $levelend
 * @property bool $levelactive
 * @property string $levelname
 * @property string $leveldescription
 * @property string $positionlevelname
 * @property int $userroleid
 * @property int $role_id
 * @property \App\Model\Entity\Role $role
 * @property \Cake\I18n\Time $rolestart
 * @property \Cake\I18n\Time $roleend
 * @property bool $roleactive
 * @property string $rolename
 * @property string $roledescription
 * @property int $userdepartementid
 * @property int $departement_id
 * @property \App\Model\Entity\Departement $departement
 * @property \Cake\I18n\Time $departementstart
 * @property \Cake\I18n\Time $departementend
 * @property bool $departementactive
 * @property string $departementname
 * @property string $departementdescription
 */
class Usercareerview extends Entity
{

}
