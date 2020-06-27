<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offre Entity
 *
 * @property int $id
 * @property string|null $category_id
 * @property string|null $name
 * @property string|null $prix
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Souscription[] $souscriptions
 * @property \App\Model\Entity\Element[] $elements
 */
class Offre extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'category_id' => true,
        'name' => true,
        'prix' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'souscriptions' => true,
        'elements' => true,
    ];
}
