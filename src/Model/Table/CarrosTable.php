<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carros Model
 *
 * @property \App\Model\Table\MarcasTable&\Cake\ORM\Association\BelongsTo $Marcas
 *
 * @method \App\Model\Entity\Carro newEmptyEntity()
 * @method \App\Model\Entity\Carro newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Carro> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carro get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Carro findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Carro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Carro> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carro|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Carro saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Carro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carro>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carro> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carro>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Carro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Carro> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CarrosTable extends Table
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
        // Adiciona o behavior de SoftDelete para verificar se o registro foi "deletado"
        $this->addBehavior('SoftDelete');

        $this->setTable('carros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Marcas', [
            'foreignKey' => 'marca_id',
            'joinType' => 'INNER',
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->allowEmptyString('nome');

        $validator
            ->scalar('modelo')
            ->maxLength('modelo', 100)
            ->allowEmptyString('modelo');

        $validator
            ->scalar('cor')
            ->maxLength('cor', 20)
            ->allowEmptyString('cor');

        $validator
            ->integer('marca_id')
            ->notEmptyString('marca_id');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

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
        $rules->add($rules->existsIn(['marca_id'], 'Marcas'), ['errorField' => 'marca_id']);

        return $rules;
    }
}
