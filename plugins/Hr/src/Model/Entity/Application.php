<?php
declare(strict_types=1);

namespace Hr\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity
 *
 * @property int $id
 * @property int $job_offer_id
 * @property int $candidate_id
 * @property string|null $cv_url
 * @property string|null $motivation_letter
 * @property string|null $status
 * @property \Cake\I18n\DateTime|null $applied_at
 *
 * @property \Hr\Model\Entity\JobOffer $job_offer
 * @property \Hr\Model\Entity\Candidate $candidate
 * @property \Hr\Model\Entity\Interview[] $interviews
 */
class Application extends Entity
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
        'job_offer_id' => true,
        'candidate_id' => true,
        'cv_url' => true,
        'motivation_letter' => true,
        'status' => true,
        'applied_at' => true,
        'job_offer' => true,
        'candidate' => true,
        'interviews' => true,
    ];
}
