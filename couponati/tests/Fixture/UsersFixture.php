<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'password' => 'Lorem ipsum dolor sit amet',
                'user_group' => 'Lorem ipsum dolor sit amet',
                'is_active' => 'Lorem ipsum dolor sit a',
                'created' => '2023-09-12 21:33:23',
                'modified' => '2023-09-12 21:33:23',
            ],
        ];
        parent::init();
    }
}
