<?php
declare(strict_types=1);

namespace English\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CourseCategories Model
 *
 * @method \English\Model\Entity\CourseCategory newEmptyEntity()
 * @method \English\Model\Entity\CourseCategory newEntity(array $data, array $options = [])
 * @method array<\English\Model\Entity\CourseCategory> newEntities(array $data, array $options = [])
 * @method \English\Model\Entity\CourseCategory get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \English\Model\Entity\CourseCategory findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \English\Model\Entity\CourseCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\English\Model\Entity\CourseCategory> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \English\Model\Entity\CourseCategory|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \English\Model\Entity\CourseCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\English\Model\Entity\CourseCategory>|\Cake\Datasource\ResultSetInterface<\English\Model\Entity\CourseCategory>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\English\Model\Entity\CourseCategory>|\Cake\Datasource\ResultSetInterface<\English\Model\Entity\CourseCategory> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\English\Model\Entity\CourseCategory>|\Cake\Datasource\ResultSetInterface<\English\Model\Entity\CourseCategory>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\English\Model\Entity\CourseCategory>|\Cake\Datasource\ResultSetInterface<\English\Model\Entity\CourseCategory> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CourseCategoriesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('course_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
