<?php
declare(strict_types=1);

namespace PetCare\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Animals Model
 *
 * @property \PetCare\Model\Table\AnnouncementsTable&\Cake\ORM\Association\HasMany $Announcements
 *
 * @method \PetCare\Model\Entity\Animal newEmptyEntity()
 * @method \PetCare\Model\Entity\Animal newEntity(array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Animal> newEntities(array $data, array $options = [])
 * @method \PetCare\Model\Entity\Animal get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PetCare\Model\Entity\Animal findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PetCare\Model\Entity\Animal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PetCare\Model\Entity\Animal> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PetCare\Model\Entity\Animal|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PetCare\Model\Entity\Animal saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Animal>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Animal>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Animal>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Animal> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Animal>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Animal>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PetCare\Model\Entity\Animal>|\Cake\Datasource\ResultSetInterface<\PetCare\Model\Entity\Animal> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AnimalsTable extends Table
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

        $this->setTable('animals');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Announcements', [
            'foreignKey' => 'animal_id',
            'className' => 'PetCare.Announcements',
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
            ->allowEmptyString('name');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->allowEmptyString('type');

        $validator
            ->integer('age')
            ->allowEmptyString('age');

        $validator
            ->scalar('health_record')
            ->allowEmptyString('health_record');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        return $validator;
    }
}
