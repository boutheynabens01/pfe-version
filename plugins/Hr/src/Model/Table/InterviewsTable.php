<?php
declare(strict_types=1);

namespace Hr\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Interviews Model
 *
 * @property \Hr\Model\Table\ApplicationsTable&\Cake\ORM\Association\BelongsTo $Applications
 *
 * @method \Hr\Model\Entity\Interview newEmptyEntity()
 * @method \Hr\Model\Entity\Interview newEntity(array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Interview> newEntities(array $data, array $options = [])
 * @method \Hr\Model\Entity\Interview get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \Hr\Model\Entity\Interview findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \Hr\Model\Entity\Interview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Interview> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Hr\Model\Entity\Interview|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \Hr\Model\Entity\Interview saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\Hr\Model\Entity\Interview>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Interview>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Interview>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Interview> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Interview>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Interview>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Interview>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Interview> deleteManyOrFail(iterable $entities, array $options = [])
 */
class InterviewsTable extends Table
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

        $this->setTable('interviews');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Applications', [
            'foreignKey' => 'application_id',
            'joinType' => 'INNER',
            'className' => 'Hr.Applications',
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
            ->integer('application_id')
            ->notEmptyString('application_id');

        $validator
            ->dateTime('interview_date')
            ->requirePresence('interview_date', 'create')
            ->notEmptyDateTime('interview_date');

        $validator
            ->scalar('comment')
            ->allowEmptyString('comment');

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
        $rules->add($rules->existsIn(['application_id'], 'Applications'), ['errorField' => 'application_id']);

        return $rules;
    }
}
