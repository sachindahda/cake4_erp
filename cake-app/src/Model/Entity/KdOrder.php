<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * KdOrder Entity
 *
 * @property int $id
 * @property string $is_exist
 * @property string|null $txn_id
 * @property string|null $referral_id
 * @property string|null $type
 * @property string $booking_type
 * @property int $user_id
 * @property string|null $package
 * @property string|null $name
 * @property string|null $email
 * @property string|null $contact
 * @property string|null $venue_address
 * @property string|null $latitude
 * @property string|null $longitude
 * @property int|null $distance
 * @property string|null $city
 * @property string|null $state
 * @property string|null $date
 * @property string|null $quot_time
 * @property int|null $qty
 * @property int|null $staff
 * @property int $pament_status
 * @property string $transport
 * @property string|null $staff_price
 * @property string|null $cart_price
 * @property string $unit_price
 * @property string|null $total_amt
 * @property string|null $paid_amt
 * @property string|null $remaining_amt
 * @property string|null $pay_remaining_amt
 * @property string|null $remaing_amt_txn_id
 * @property string|null $description
 * @property string|null $image
 * @property int $status
 * @property string|null $created
 * @property string|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class KdOrder extends Entity
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
        'is_exist' => true,
        'txn_id' => true,
        'referral_id' => true,
        'type' => true,
        'booking_type' => true,
        'users_id' => true,
        'package' => true,
        'name' => true,
        'email' => true,
        'contact' => true,
        'venue_address' => true,
        'latitude' => true,
        'longitude' => true,
        'distance' => true,
        'city' => true,
        'state' => true,
        'date' => true,
        'quot_time' => true,
        'qty' => true,
        'staff' => true,
        'pament_status' => true,
        'transport' => true,
        'staff_price' => true,
        'cart_price' => true,
        'unit_price' => true,
        'total_amt' => true,
        'paid_amt' => true,
        'remaining_amt' => true,
        'pay_remaining_amt' => true,
        'remaing_amt_txn_id' => true,
        'description' => true,
        'image' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'no_of_person'=>true,
        'user' => true,
        'gst' => true,

    ];
}
