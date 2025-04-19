<?php
declare(strict_types=1);

namespace PetCare\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Messages Model
 *
 * @method \PetCare\Model\Entity\Message newEmptyEntity()
 * @method \PetCare\Model\Entity\Message newEntity(array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Message> newEntities(array $data, array $options = [])
 * @method \PetCare\Model\Entity\Message get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PetCare\Model\Entity\Message findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PetCare\Model\Entity\Message patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Message> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PetCare\Model\Entity\Message|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PetCare\Model\Entity\Message saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Message>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Message>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Message>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Message> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Message>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Message>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Message>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Message> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MessagesTable extends Table
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

        $this->setTable('messages');
        $this->setDisplayField('id');
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
            ->integer('id_envoyeur')
            ->requirePresence('id_envoyeur', 'create')
            ->notEmptyString('id_envoyeur');

        $validator
            ->integer('id_receveur')
            ->requirePresence('id_receveur', 'create')
            ->notEmptyString('id_receveur');

        $validator
            ->scalar('contenu')
            ->requirePresence('contenu', 'create')
            ->notEmptyString('contenu');

        $validator
            ->dateTime('date_envoi')
            ->allowEmptyDateTime('date_envoi');

        return $validator;
    }
}
