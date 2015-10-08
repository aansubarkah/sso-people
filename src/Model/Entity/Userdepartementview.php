<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Userdepartementview Entity.
 *
 * @property int $id
 * @property int $departement_id
 * @property \App\Model\Entity\Departement $departement
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property bool $active
 * @property string $departementname
 * @property string $departementdescription
 * @property bool $departementactive
 * @property string $username
 * @property bool $useractive
 */
class Userdepartementview extends Entity
{

}
