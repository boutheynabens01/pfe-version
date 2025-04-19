<?php
declare(strict_types=1);

namespace Hr\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobOffers Model
 *
 * @property \Hr\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Hrs
 * @property \Hr\Model\Table\ApplicationsTable&\Cake\ORM\Association\HasMany $Applications
 *
 * @method \Hr\Model\Entity\JobOffer newEmptyEntity()
 * @method \Hr\Model\Entity\JobOffer newEntity(array $data, array $options = [])
 * @method array<\Hr\Model\Entity\JobOffer> newEntities(array $data, array $options = [])
 * @method \Hr\Model\Entity\JobOffer get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \Hr\Model\Entity\JobOffer findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \Hr\Model\Entity\JobOffer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\Hr\Model\Entity\JobOffer> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Hr\Model\Entity\JobOffer|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \Hr\Model\Entity\JobOffer saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\Hr\Model\Entity\JobOffer>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\JobOffer>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\JobOffer>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\JobOffer> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\JobOffer>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\JobOffer>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\JobOffer>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\JobOffer> deleteManyOrFail(iterable $entities, array $options = [])
 */
class JobOffersTable extends Table
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

        $this->setTable('job_offers');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Hrs', [
            'foreignKey' => 'hr_id',
            'className' => 'Hr.Users',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Applications', [
            'foreignKey' => 'job_offer_id',
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
            ->scalar('title')
            ->maxLength('title', 150)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->decimal('salary')
            ->allowEmptyString('salary');

        $validator
            ->scalar('contract_type')
            ->requirePresence('contract_type', 'create')
            ->notEmptyString('contract_type');

        $validator
            ->date('deadline')
            ->allowEmptyDate('deadline');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->integer('hr_id')
            ->notEmptyString('hr_id');

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
        $rules->add($rules->existsIn(['hr_id'], 'Hrs'), ['errorField' => 'hr_id']);

        return $rules;
    }
}
