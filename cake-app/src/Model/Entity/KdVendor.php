<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * KdVendor Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $mobile
 * @property string|null $website
 * @property string $gst_number
 * @property string $bank_account_number
 * @property string $bank_ifsc
 * @property string $bank_name
 * @property string $bank_branch_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class KdVendor extends Entity
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
        'name' => true,
        'email' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'country' => true,
        'mobile' => true,
        'website' => true,
        'gst_number' => true,
        'bank_account_number' => true,
        'bank_ifsc' => true,
        'bank_name' => true,
        'bank_branch_name' => true,
        'created' => true,
        'modified' => true,
    ];
}
