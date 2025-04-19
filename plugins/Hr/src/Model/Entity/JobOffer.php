<?php
declare(strict_types=1);

namespace Hr\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobOffer Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $salary
 * @property string $contract_type
 * @property \Cake\I18n\Date|null $deadline
 * @property string|null $status
 * @property int $hr_id
 * @property \Cake\I18n\DateTime|null $created_at
 *
 * @property \Hr\Model\Entity\Hr $hr
 * @property \Hr\Model\Entity\Application[] $applications
 */
class JobOffer extends Entity
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
        'title' => true,
        'description' => true,
        'salary' => true,
        'contract_type' => true,
        'deadline' => true,
        'status' => true,
        'hr_id' => true,
        'created_at' => true,
        'hr' => true,
        'applications' => true,
    ];
}
