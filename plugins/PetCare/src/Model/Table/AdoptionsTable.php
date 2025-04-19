<?php
declare(strict_types=1);

namespace PetCare\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Adoptions Model
 *
 * @method \PetCare\Model\Entity\Adoption newEmptyEntity()
 * @method \PetCare\Model\Entity\Adoption newEntity(array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Adoption> newEntities(array $data, array $options = [])
 * @method \PetCare\Model\Entity\Adoption get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PetCare\Model\Entity\Adoption findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PetCare\Model\Entity\Adoption patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Adoption> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PetCare\Model\Entity\Adoption|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PetCare\Model\Entity\Adoption saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Adoption>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Adoption>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Adoption>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Adoption> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Adoption>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Adoption>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Adoption>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Adoption> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AdoptionsTable extends Table
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

        $this->setTable('adoptions');
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
            ->integer('id_animal')
            ->requirePresence('id_animal', 'create')
            ->notEmptyString('id_animal');

        $validator
            ->integer('id_adoptant')
            ->requirePresence('id_adoptant', 'create')
            ->notEmptyString('id_adoptant');

        $validator
            ->dateTime('date_adoption')
            ->allowEmptyDateTime('date_adoption');

        return $validator;
    }
}
