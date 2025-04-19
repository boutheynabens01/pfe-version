<?php
declare(strict_types=1);

namespace Hr\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobOffersFixture
 */
class JobOffersFixture extends TestFixture
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
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'salary' => 1.5,
                'contract_type' => 'Lorem ipsum dolor sit amet',
                'deadline' => '2025-04-19',
                'status' => 'Lorem ipsum dolor sit amet',
                'hr_id' => 1,
                'created_at' => '2025-04-19 08:54:50',
            ],
        ];
        parent::init();
    }
}
