<?php
declare(strict_types=1);

namespace Hr\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $position
 * @property \Cake\I18n\Date|null $hire_date
 * @property string|null $salary
 *
 * @property \Hr\Model\Entity\User $user
 */
class Employee extends Entity
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
        'user_id' => true,
        'position' => true,
        'hire_date' => true,
        'salary' => true,
        'user' => true,
    ];
}
