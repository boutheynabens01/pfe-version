<?php
declare(strict_types=1);

namespace English\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int $category_id
 * @property \Cake\I18n\DateTime|null $created_at
 *
 * @property \English\Model\Entity\CourseCategory $category
 * @property \English\Model\Entity\Chapter[] $chapters
 */
class Course extends Entity
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
        'category_id' => true,
        'created_at' => true,
        'category' => true,
        'chapters' => true,
    ];
}
