<?php
declare(strict_types=1);

namespace Hr\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departments Model
 *
 * @property \Hr\Model\Table\JobsTable&\Cake\ORM\Association\HasMany $Jobs
 *
 * @method \Hr\Model\Entity\Department newEmptyEntity()
 * @method \Hr\Model\Entity\Department newEntity(array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Department> newEntities(array $data, array $options = [])
 * @method \Hr\Model\Entity\Department get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \Hr\Model\Entity\Department findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \Hr\Model\Entity\Department patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Department> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Hr\Model\Entity\Department|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \Hr\Model\Entity\Department saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\Hr\Model\Entity\Department>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Department>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Department>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Department> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Department>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Department>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Department>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Department> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DepartmentsTable extends Table
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

        $this->setTable('departments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Jobs', [
            'foreignKey' => 'department_id',
            'className' => 'Hr.Jobs',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('code')
            ->maxLength('code', 50)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        return $validator;
    }
}
