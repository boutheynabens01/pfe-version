<?php
declare(strict_types=1);

namespace English\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use English\Model\Table\CourseCategoriesTable;

/**
 * English\Model\Table\CourseCategoriesTable Test Case
 */
class CourseCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \English\Model\Table\CourseCategoriesTable
     */
    protected $CourseCategories;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.English.CourseCategories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CourseCategories') ? [] : ['className' => CourseCategoriesTable::class];
        $this->CourseCategories = $this->getTableLocator()->get('CourseCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CourseCategories);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \English\Model\Table\CourseCategoriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
