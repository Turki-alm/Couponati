<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CouponsFixture
 */
class CouponsFixture extends TestFixture
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
                'logo' => 'Lorem ipsum dolor sit amet',
                'company' => 'Lorem ipsum dolor sit amet',
                'short_description' => 'Lorem ipsum dolor sit amet',
                'coupon' => 'Lorem ipsum dolor sit amet',
                'webiste' => 'Lorem ipsum dolor sit amet',
                'is_active' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-09-12 21:33:23',
                'modified' => '2023-09-12 21:33:23',
            ],
        ];
        parent::init();
    }
}
