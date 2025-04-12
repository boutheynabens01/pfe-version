<?php
declare(strict_types=1);

namespace UpLearn\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categories Model
 *
 * @method \UpLearn\Model\Entity\Category newEmptyEntity()
 * @method \UpLearn\Model\Entity\Category newEntity(array $data, array $options = [])
 * @method array<\UpLearn\Model\Entity\Category> newEntities(array $data, array $options = [])
 * @method \UpLearn\Model\Entity\Category get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \UpLearn\Model\Entity\Category findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \UpLearn\Model\Entity\Category patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\UpLearn\Model\Entity\Category> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \UpLearn\Model\Entity\Category|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \UpLearn\Model\Entity\Category saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\UpLearn\Model\Entity\Category>|\Cake\Datasource\ResultSetInterface<\UpLearn\Model\Entity\Category>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\UpLearn\Model\Entity\Category>|\Cake\Datasource\ResultSetInterface<\UpLearn\Model\Entity\Category> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\UpLearn\Model\Entity\Category>|\Cake\Datasource\ResultSetInterface<\UpLearn\Model\Entity\Category>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\UpLearn\Model\Entity\Category>|\Cake\Datasource\ResultSetInterface<\UpLearn\Model\Entity\Category> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CategoriesTable extends Table
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

        $this->setTable('categories');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
