<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $categoryId
 * @property string $description
 * @property int $point
 * @property int $imageId
 * @property \Cake\I18n\FrozenDate|null $create_at
 * @property \Cake\I18n\FrozenDate|null $update_at
 * @property int|null $del_flag
 */
class Product extends Entity
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
        'price' => true,
        'categoryId' => true,
        'description' => true,
        'point' => true,
        'create_at' => true,
        'update_at' => true,
        'del_flag' => true,
    ];
}
