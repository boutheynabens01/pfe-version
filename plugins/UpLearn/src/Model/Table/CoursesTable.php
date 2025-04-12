<?php
declare(strict_types=1);

namespace UpLearn\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Courses Model
 *
 * @property \UpLearn\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \UpLearn\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \UpLearn\Model\Entity\Course newEmptyEntity()
 * @method \UpLearn\Model\Entity\Course newEntity(array $data, array $options = [])
 * @method array<\UpLearn\Model\Entity\Course> newEntities(array $data, array $options = [])
 * @method \UpLearn\Model\Entity\Course get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \UpLearn\Model\Entity\Course findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \UpLearn\Model\Entity\Course patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\UpLearn\Model\Entity\Course> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \UpLearn\Model\Entity\Course|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \UpLearn\Model\Entity\Course saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\UpLearn\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\UpLearn\Model\Entity\Course>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\UpLearn\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\UpLearn\Model\Entity\Course> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\UpLearn\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\UpLearn\Model\Entity\Course>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\UpLearn\Model\Entity\Course>|\Cake\Datasource\ResultSetInterface<\UpLearn\Model\Entity\Course> deleteManyOrFail(iterable $entities, array $options = [])
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
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'UpLearn.Users',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'categorie_id',
            'joinType' => 'INNER',
            'className' => 'UpLearn.Categories',
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
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('picture')
            ->maxLength('picture', 255)
            ->allowEmptyString('picture');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('categorie_id')
            ->notEmptyString('categorie_id');

        $validator
            ->scalar('file_path')
            ->maxLength('file_path', 255)
            ->allowEmptyString('file_path');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('level')
            ->allowEmptyString('level');

        $validator
            ->integer('lesseons')
            ->allowEmptyString('lesseons');

        $validator
            ->integer('pages')
            ->allowEmptyString('pages');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['categorie_id'], 'Categories'), ['errorField' => 'categorie_id']);

        return $rules;
    }
}
