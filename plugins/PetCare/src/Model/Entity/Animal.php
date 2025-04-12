<?php
declare(strict_types=1);

namespace PetCare\Model\Entity;

use Cake\ORM\Entity;

/**
 * Animal Entity
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int|null $age
 * @property string|null $healthrecord
 * @property string|null $picture
 */
class Animal extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'type' => true,
        'name' => true,
        'age' => true,
        'healthrecord' => true,
        'picture' => true,
    ];
}
