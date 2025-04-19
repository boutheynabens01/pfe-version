<?php
declare(strict_types=1);

namespace PetCare\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdoptionsFixture
 */
class AdoptionsFixture extends TestFixture
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
                'id_animal' => 1,
                'id_adoptant' => 1,
                'date_adoption' => '2025-04-19 08:29:53',
            ],
        ];
        parent::init();
    }
}
