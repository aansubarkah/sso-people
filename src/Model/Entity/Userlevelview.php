<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Userlevelview Entity.
 *
 * @property int $id
 * @property int $level_id
 * @property \App\Model\Entity\Level $level
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property bool $active
 * @property string $name
 * @property bool $useractive
 * @property string $levelname
 * @property string $leveldescription
 * @property bool $levelactive
 * @property string $positionlevelname
 */
class Userlevelview extends Entity
{

}
