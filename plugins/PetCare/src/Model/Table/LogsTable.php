<?php
declare(strict_types=1);

namespace PetCare\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logs Model
 *
 * @method \PetCare\Model\Entity\Log newEmptyEntity()
 * @method \PetCare\Model\Entity\Log newEntity(array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Log> newEntities(array $data, array $options = [])
 * @method \PetCare\Model\Entity\Log get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PetCare\Model\Entity\Log findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PetCare\Model\Entity\Log patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Log> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PetCare\Model\Entity\Log|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PetCare\Model\Entity\Log saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Log>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Log>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Log>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Log> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Log>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Log>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Log>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Log> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LogsTable extends Table
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

        $this->setTable('logs');
        $this->setDisplayField('action');
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
            ->integer('id_animal')
            ->requirePresence('id_animal', 'create')
            ->notEmptyString('id_animal');

        $validator
            ->integer('id_admin')
            ->requirePresence('id_admin', 'create')
            ->notEmptyString('id_admin');

        $validator
            ->scalar('action')
            ->requirePresence('action', 'create')
            ->notEmptyString('action');

        $validator
            ->scalar('raison_refus')
            ->allowEmptyString('raison_refus');

        $validator
            ->dateTime('date_action')
            ->allowEmptyDateTime('date_action');

        return $validator;
    }
}
