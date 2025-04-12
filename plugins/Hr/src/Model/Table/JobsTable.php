<?php
declare(strict_types=1);

namespace Hr\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobs Model
 *
 * @property \Hr\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 *
 * @method \Hr\Model\Entity\Job newEmptyEntity()
 * @method \Hr\Model\Entity\Job newEntity(array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Job> newEntities(array $data, array $options = [])
 * @method \Hr\Model\Entity\Job get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \Hr\Model\Entity\Job findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \Hr\Model\Entity\Job patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Job> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Hr\Model\Entity\Job|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \Hr\Model\Entity\Job saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\Hr\Model\Entity\Job>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Job>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Job>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Job> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Job>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Job>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Job>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Job> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JobsTable extends Table
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

        $this->setTable('jobs');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'className' => 'Hr.Departments',
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
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('code')
            ->maxLength('code', 50)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('qualification_required')
            ->maxLength('qualification_required', 255)
            ->requirePresence('qualification_required', 'create')
            ->notEmptyString('qualification_required');

        $validator
            ->scalar('state')
            ->maxLength('state', 50)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('benefits')
            ->allowEmptyString('benefits');

        $validator
            ->nonNegativeInteger('department_id')
            ->allowEmptyString('department_id');

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
        $rules->add($rules->existsIn(['department_id'], 'Departments'), ['errorField' => 'department_id']);

        return $rules;
    }
}
