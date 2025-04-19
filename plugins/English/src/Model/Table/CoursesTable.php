<?php
declare(strict_types=1);

namespace English\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Courses Model
 *
 * @property \English\Model\Table\CourseCategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \English\Model\Table\ChaptersTable&\Cake\ORM\Association\HasMany $Chapters
 *
 * @method \English\Model\Entity\Course newEmptyEntity()
 * @method \English\Model\Entity\Course newEntity(array $data, array $options = [])
 * @method array<\English\Model\Entity\Course> newEntities(array $data, array $options = [])
 * @method \English\Model\Entity\Course get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \English\Model\Entity\Course findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \English\Model\Entity\Course patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\English\Model\Entity\Course> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \English\Model\Entity\Course|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \English\Model\Entity\Course saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\English\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\English\Model\Entity\Course>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\English\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\English\Model\Entity\Course> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\English\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\English\Model\Entity\Course>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\English\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\English\Model\Entity\Course> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CoursesTable extends Table
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

        $this->setTable('courses');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'className' => 'English.CourseCategories',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Chapters', [
            'foreignKey' => 'course_id',
            'className' => 'English.Chapters',
        ]);
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
            ->scalar('title')
            ->maxLength('title', 150)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('category_id')
            ->notEmptyString('category_id');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'), ['errorField' => 'category_id']);

        return $rules;
    }
}
