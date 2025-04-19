<?php
declare(strict_types=1);

namespace Hr\Model\Entity;

use Cake\ORM\Entity;

/**
 * Interview Entity
 *
 * @property int $id
 * @property int $application_id
 * @property \Cake\I18n\DateTime $interview_date
 * @property string|null $comment
 *
 * @property \Hr\Model\Entity\Application $application
 */
class Interview extends Entity
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
        'application_id' => true,
        'interview_date' => true,
        'comment' => true,
        'application' => true,
    ];
}
