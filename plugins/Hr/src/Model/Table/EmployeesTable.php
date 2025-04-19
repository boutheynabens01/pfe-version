<?php
declare(strict_types=1);

namespace Hr\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \Hr\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \Hr\Model\Entity\Employee newEmptyEntity()
 * @method \Hr\Model\Entity\Employee newEntity(array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Employee> newEntities(array $data, array $options = [])
 * @method \Hr\Model\Entity\Employee get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \Hr\Model\Entity\Employee findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \Hr\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Employee> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Hr\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \Hr\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\Hr\Model\Entity\Employee>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Employee>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Employee>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Employee> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Employee>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Employee>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Employee>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Employee> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'Hr.Users',
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
            ->scalar('position')
            ->maxLength('position', 100)
            ->allowEmptyString('position');

        $validator
            ->date('hire_date')
            ->allowEmptyDate('hire_date');

        $validator
            ->decimal('salary')
            ->allowEmptyString('salary');

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

        return $rules;
    }
}
