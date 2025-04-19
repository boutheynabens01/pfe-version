<?php
declare(strict_types=1);

namespace PetCare\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PetCare\Model\Table\MessagesTable;

/**
 * PetCare\Model\Table\MessagesTable Test Case
 */
class MessagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PetCare\Model\Table\MessagesTable
     */
    protected $Messages;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PetCare.Messages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Messages') ? [] : ['className' => MessagesTable::class];
        $this->Messages = $this->getTableLocator()->get('Messages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Messages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PetCare\Model\Table\MessagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
