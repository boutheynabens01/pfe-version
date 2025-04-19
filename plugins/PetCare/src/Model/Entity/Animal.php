<?php
declare(strict_types=1);

namespace PetCare\Model\Entity;

use Cake\ORM\Entity;

/**
 * Animal Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $type
 * @property int|null $age
 * @property string|null $health_record
 * @property string|null $photo
 *
 * @property \PetCare\Model\Entity\Announcement[] $announcements
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
        'name' => true,
        'type' => true,
        'age' => true,
        'health_record' => true,
        'photo' => true,
        'announcements' => true,
    ];
}
