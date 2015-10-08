<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Userroleview Entity.
 *
 * @property int $id
 * @property int $role_id
 * @property \App\Model\Entity\Role $role
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property bool $active
 * @property string $rolename
 * @property string $roledescription
 * @property bool $roleactive
 * @property string $username
 * @property bool $useractive
 */
class Userroleview extends Entity
{

}
