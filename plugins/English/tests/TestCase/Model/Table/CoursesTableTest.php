<?php
declare(strict_types=1);

namespace English\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use English\Model\Table\CoursesTable;

/**
 * English\Model\Table\CoursesTable Test Case
 */
class CoursesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \English\Model\Table\CoursesTable
     */
    protected $Courses;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.English.Courses',
        'plugin.English.Categories',
        'plugin.English.Chapters',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Courses') ? [] : ['className' => CoursesTable::class];
        $this->Courses = $this->getTableLocator()->get('Courses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Courses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \English\Model\Table\CoursesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \English\Model\Table\CoursesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
