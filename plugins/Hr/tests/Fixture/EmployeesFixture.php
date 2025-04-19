<?php
declare(strict_types=1);

namespace Hr\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
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
                'user_id' => 1,
                'position' => 'Lorem ipsum dolor sit amet',
                'hire_date' => '2025-04-19',
                'salary' => 1.5,
            ],
        ];
        parent::init();
    }
}
