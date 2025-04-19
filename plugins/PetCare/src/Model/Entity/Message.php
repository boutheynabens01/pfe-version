<?php
declare(strict_types=1);

namespace PetCare\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property int $id_envoyeur
 * @property int $id_receveur
 * @property string $contenu
 * @property \Cake\I18n\DateTime|null $date_envoi
 */
class Message extends Entity
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
        'id_envoyeur' => true,
        'id_receveur' => true,
        'contenu' => true,
        'date_envoi' => true,
    ];
}
