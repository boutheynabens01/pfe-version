<?php
declare(strict_types=1);

namespace PetCare\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AnimalsFixture
 */
class AnimalsFixture extends TestFixture
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
                'type' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'healthrecord' => 'Lorem ipsum dolor sit amet',
                'picture' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
