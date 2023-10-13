<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Request Entity
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $website
 * @property string|null $trade_mark
 * @property float $monthly_orders_average
 * @property float $purchases_average
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Request extends Entity
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
    protected $_accessible = [
        'full_name' => true,
        'email' => true,
        'phone' => true,
        'website' => true,
        'trade_mark' => true,
        'monthly_orders_average' => true,
        'purchases_average' => true,
        'created' => true,
        'modified' => true,
    ];
}
