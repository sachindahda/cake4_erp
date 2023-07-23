<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KdOrdersFixture
 */
class KdOrdersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'is_exist' => 'Lorem ipsum dolor sit amet',
                'txn_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'referral_id' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'booking_type' => 'Lorem ipsum dolor sit amet',
                'administrators_id' => 1,
                'package' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'contact' => 'Lorem ipsum dolor sit amet',
                'venue_address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'latitude' => 'Lorem ipsum dolor sit amet',
                'longitude' => 'Lorem ipsum dolor sit amet',
                'distance' => 1,
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'date' => 'Lorem ipsum dolor sit amet',
                'quot_time' => 'Lorem ipsum dolor sit amet',
                'qty' => 1,
                'staff' => 1,
                'pament_status' => 1,
                'transport' => 1.5,
                'staff_price' => 1.5,
                'cart_price' => 1.5,
                'unit_price' => 1.5,
                'total_amt' => 1.5,
                'paid_amt' => 1.5,
                'remaining_amt' => 1.5,
                'pay_remaining_amt' => 1.5,
                'remaing_amt_txn_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'image' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => 'Lorem ipsum dolor sit amet',
                'modified' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
