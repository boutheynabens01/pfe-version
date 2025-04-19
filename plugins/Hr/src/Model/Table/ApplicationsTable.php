<?php
declare(strict_types=1);

namespace Hr\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Applications Model
 *
 * @property \Hr\Model\Table\JobOffersTable&\Cake\ORM\Association\BelongsTo $JobOffers
 * @property \Hr\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Candidates
 * @property \Hr\Model\Table\InterviewsTable&\Cake\ORM\Association\HasMany $Interviews
 *
 * @method \Hr\Model\Entity\Application newEmptyEntity()
 * @method \Hr\Model\Entity\Application newEntity(array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Application> newEntities(array $data, array $options = [])
 * @method \Hr\Model\Entity\Application get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \Hr\Model\Entity\Application findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \Hr\Model\Entity\Application patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\Hr\Model\Entity\Application> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Hr\Model\Entity\Application|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \Hr\Model\Entity\Application saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\Hr\Model\Entity\Application>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Application>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Application>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Application> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Application>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Application>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\Hr\Model\Entity\Application>|\Cake\Datasource\ResultSetInterface<\Hr\Model\Entity\Application> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ApplicationsTable extends Table
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

        $this->setTable('applications');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('JobOffers', [
            'foreignKey' => 'job_offer_id',
            'joinType' => 'INNER',
            'className' => 'Hr.JobOffers',
        ]);
        $this->belongsTo('Candidates', [
            'foreignKey' => 'candidate_id',
            'className' => 'Hr.Users',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Interviews', [
            'foreignKey' => 'application_id',
            'className' => 'Hr.Interviews',
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
            ->integer('job_offer_id')
            ->notEmptyString('job_offer_id');

        $validator
            ->integer('candidate_id')
            ->notEmptyString('candidate_id');

        $validator
            ->scalar('cv_url')
            ->maxLength('cv_url', 255)
            ->allowEmptyString('cv_url');

        $validator
            ->scalar('motivation_letter')
            ->allowEmptyString('motivation_letter');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->dateTime('applied_at')
            ->allowEmptyDateTime('applied_at');

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
        $rules->add($rules->existsIn(['job_offer_id'], 'JobOffers'), ['errorField' => 'job_offer_id']);
        $rules->add($rules->existsIn(['candidate_id'], 'Candidates'), ['errorField' => 'candidate_id']);

        return $rules;
    }
}
