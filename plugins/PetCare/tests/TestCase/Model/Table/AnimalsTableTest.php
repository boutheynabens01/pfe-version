<?php
declare(strict_types=1);

namespace PetCare\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PetCare\Model\Table\AnimalsTable;

/**
 * PetCare\Model\Table\AnimalsTable Test Case
 */
class AnimalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PetCare\Model\Table\AnimalsTable
     */
    protected $Animals;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PetCare.Animals',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Animals') ? [] : ['className' => AnimalsTable::class];
        $this->Animals = $this->getTableLocator()->get('Animals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Animals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PetCare\Model\Table\AnimalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
