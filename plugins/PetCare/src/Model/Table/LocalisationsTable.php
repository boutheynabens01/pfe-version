<?php
declare(strict_types=1);

namespace PetCare\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Localisations Model
 *
 * @method \PetCare\Model\Entity\Localisation newEmptyEntity()
 * @method \PetCare\Model\Entity\Localisation newEntity(array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Localisation> newEntities(array $data, array $options = [])
 * @method \PetCare\Model\Entity\Localisation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PetCare\Model\Entity\Localisation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PetCare\Model\Entity\Localisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Localisation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PetCare\Model\Entity\Localisation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PetCare\Model\Entity\Localisation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Localisation>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Localisation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Localisation>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Localisation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Localisation>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Localisation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Localisation>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Localisation> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LocalisationsTable extends Table
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

        $this->setTable('localisations');
        $this->setDisplayField('ville');
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
            ->scalar('ville')
            ->maxLength('ville', 100)
            ->requirePresence('ville', 'create')
            ->notEmptyString('ville');

        $validator
            ->scalar('wilaya')
            ->maxLength('wilaya', 100)
            ->requirePresence('wilaya', 'create')
            ->notEmptyString('wilaya');

        return $validator;
    }
}
