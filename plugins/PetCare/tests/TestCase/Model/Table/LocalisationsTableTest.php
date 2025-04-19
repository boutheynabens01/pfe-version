<?php
declare(strict_types=1);

namespace PetCare\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PetCare\Model\Table\LocalisationsTable;

/**
 * PetCare\Model\Table\LocalisationsTable Test Case
 */
class LocalisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PetCare\Model\Table\LocalisationsTable
     */
    protected $Localisations;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PetCare.Localisations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Localisations') ? [] : ['className' => LocalisationsTable::class];
        $this->Localisations = $this->getTableLocator()->get('Localisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Localisations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PetCare\Model\Table\LocalisationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
