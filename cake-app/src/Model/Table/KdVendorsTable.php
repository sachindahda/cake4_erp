<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KdVendors Model
 *
 * @method \App\Model\Entity\KdVendor newEmptyEntity()
 * @method \App\Model\Entity\KdVendor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\KdVendor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KdVendor get($primaryKey, $options = [])
 * @method \App\Model\Entity\KdVendor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\KdVendor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KdVendor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\KdVendor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KdVendor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KdVendor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\KdVendor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\KdVendor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\KdVendor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KdVendorsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('kd_vendors');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('state')
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 255)
            ->requirePresence('zip', 'create')
            ->notEmptyString('zip');

        $validator
            ->scalar('country')
            ->requirePresence('country', 'create')
            ->notEmptyString('country');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 255)
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile');

        $validator
            ->scalar('website')
            ->maxLength('website', 255)
            ->allowEmptyString('website');

        $validator
            ->scalar('gst_number')
            ->maxLength('gst_number', 255)
            ->requirePresence('gst_number', 'create')
            ->notEmptyString('gst_number');

        $validator
            ->scalar('bank_account_number')
            ->maxLength('bank_account_number', 255)
            ->requirePresence('bank_account_number', 'create')
            ->notEmptyString('bank_account_number');

        $validator
            ->scalar('bank_ifsc')
            ->maxLength('bank_ifsc', 255)
            ->requirePresence('bank_ifsc', 'create')
            ->notEmptyString('bank_ifsc');

        $validator
            ->scalar('bank_name')
            ->maxLength('bank_name', 255)
            ->requirePresence('bank_name', 'create')
            ->notEmptyString('bank_name');

        $validator
            ->scalar('bank_branch_name')
            ->maxLength('bank_branch_name', 255)
            ->requirePresence('bank_branch_name', 'create')
            ->notEmptyString('bank_branch_name');

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
