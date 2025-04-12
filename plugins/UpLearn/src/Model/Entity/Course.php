<?php
declare(strict_types=1);

namespace UpLearn\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string|null $picture
 * @property string|null $description
 * @property int $categorie_id
 * @property string|null $file_path
 * @property string|null $status
 * @property string|null $level
 * @property int|null $lesseons
 * @property int|null $pages
 *
 * @property \UpLearn\Model\Entity\User $user
 * @property \UpLearn\Model\Entity\Category $category
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
        'user_id' => true,
        'name' => true,
        'picture' => true,
        'description' => true,
        'categorie_id' => true,
        'file_path' => true,
        'status' => true,
        'level' => true,
        'lesseons' => true,
        'pages' => true,
        'user' => true,
        'category' => true,
    ];
}
