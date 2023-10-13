<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequestsFixture
 */
class RequestsFixture extends TestFixture
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
                'full_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor sit amet',
                'website' => 'Lorem ipsum dolor sit amet',
                'trade_mark' => 'Lorem ipsum dolor sit amet',
                'monthly_orders_average' => 1,
                'purchases_average' => 1,
                'created' => '2023-09-14 14:25:22',
                'modified' => '2023-09-14 14:25:22',
            ],
        ];
        parent::init();
    }
}
