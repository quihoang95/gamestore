<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $birthday
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $username
 * @property string $password
 * @property int $roleId
 * @property int $point
 * @property \Cake\I18n\FrozenDate|null $create_at
 * @property \Cake\I18n\FrozenDate|null $update_at
 * @property int|null $del_flag
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
        'name' => true,
        'birthday' => true,
        'email' => true,
        'phone' => true,
        'address' => true,
        'username' => true,
        'password' => true,
        'roleId' => true,
        'point' => true,
        'create_at' => true,
        'update_at' => true,
        'del_flag' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
