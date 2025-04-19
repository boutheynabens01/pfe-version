<?php
declare(strict_types=1);

namespace PetCare\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LocalisationsFixture
 */
class LocalisationsFixture extends TestFixture
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
                'ville' => 'Lorem ipsum dolor sit amet',
                'wilaya' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
