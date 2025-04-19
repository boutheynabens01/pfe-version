<?php
declare(strict_types=1);

namespace PetCare\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PetCare\Model\Table\AdoptionsTable;

/**
 * PetCare\Model\Table\AdoptionsTable Test Case
 */
class AdoptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PetCare\Model\Table\AdoptionsTable
     */
    protected $Adoptions;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PetCare.Adoptions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Adoptions') ? [] : ['className' => AdoptionsTable::class];
        $this->Adoptions = $this->getTableLocator()->get('Adoptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Adoptions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PetCare\Model\Table\AdoptionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
