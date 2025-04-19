<?php
declare(strict_types=1);

namespace PetCare\Model\Entity;

use Cake\ORM\Entity;

/**
 * Adoption Entity
 *
 * @property int $id
 * @property int $id_animal
 * @property int $id_adoptant
 * @property \Cake\I18n\DateTime|null $date_adoption
 */
class Adoption extends Entity
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
        'id_animal' => true,
        'id_adoptant' => true,
        'date_adoption' => true,
    ];
}
