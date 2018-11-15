<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Register Entity
 *
 * @property int $id
 * @property string $Username
 * @property string $Password
 * @property string $Email
 * @property int $Age
 */
class Register extends Entity
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
        'Username' => true,
        'Password' => true,
        'Email' => true,
        'Age' => true
    ];

protected function _setPassword ($password){
  return (new DefaultPasswordHasher) -> hash($password);
}

}
