<?php
declare(strict_types=1);

namespace Hr\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $qualification_required
 * @property string $state
 * @property string|null $description
 * @property string|null $benefits
 * @property int|null $department_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \Hr\Model\Entity\Department $department
 */
class Job extends Entity
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
        'code' => true,
        'qualification_required' => true,
        'state' => true,
        'description' => true,
        'benefits' => true,
        'department_id' => true,
        'created' => true,
        'modified' => true,
        'department' => true,
    ];
}
