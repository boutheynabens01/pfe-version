<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $fullname
 * @property string $email
 * @property string $password
 * @property string|null $phone
 * @property string|null $address
 * @property int|null $age
 * @property \Cake\I18n\Date|null $birthdate
 * @property string|null $profilepicture
 * @property string|null $bio
 * @property string|null $gender
 * @property string|null $role
 * @property \Cake\I18n\DateTime $created_at
 * @property \Cake\I18n\DateTime $updated_at
 */
class User extends Entity
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
        'fullname' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'address' => true,
        'age' => true,
        'birthdate' => true,
        'profilepicture' => true,
        'bio' => true,
        'gender' => true,
        'role' => true,
        'created_at' => true,
        'updated_at' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return null;
    }
}
