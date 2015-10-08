<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usereducationview Entity.
 *
 * @property int $id
 * @property \Cake\I18n\Time $date
 * @property int $education_id
 * @property \App\Model\Entity\Education $education
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property bool $active
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $usernumber
 * @property string $username
 * @property bool $useractive
 * @property string $educationname
 * @property string $educationdescription
 * @property bool $educationactive
 */
class Usereducationview extends Entity
{

}
