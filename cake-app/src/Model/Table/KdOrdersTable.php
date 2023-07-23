<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * KdOrders Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\KdOrder newEmptyEntity()
 * @method \App\Model\Entity\KdOrder newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\KdOrder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\KdOrder get($primaryKey, $options = [])
 * @method \App\Model\Entity\KdOrder findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\KdOrder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\KdOrder[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\KdOrder|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KdOrder saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\KdOrder[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\KdOrder[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\KdOrder[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\KdOrder[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KdOrdersTable extends Table
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

        $this->setTable('kd_orders');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
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
            ->scalar('is_exist')
            ->maxLength('is_exist', 255)
            ->notEmptyString('is_exist');

        $validator
            ->scalar('txn_id')
            ->allowEmptyString('txn_id');

        $validator
            ->scalar('referral_id')
            ->maxLength('referral_id', 255)
            ->allowEmptyString('referral_id');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->allowEmptyString('type');

        // $validator
        //     ->scalar('booking_type')
        //     ->maxLength('booking_type', 255)
        //     ->notEmptyString('booking_type');

        $validator
            ->integer('users_id')
            ->notEmptyString('users_id');

        $validator
            ->scalar('package')
            ->maxLength('package', 255)
            ->allowEmptyString('package');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('contact')
            ->maxLength('contact', 100)
            ->requirePresence('contact', 'create')
            ->notEmptyString('contact');

        $validator
            ->scalar('venue_address')
            ->requirePresence('venue_address', 'create')
            ->notEmptyString('venue_address');

        $validator
            ->scalar('latitude')
            ->maxLength('latitude', 255)
            ->allowEmptyString('latitude');

        $validator
            ->scalar('longitude')
            ->maxLength('longitude', 255)
            ->allowEmptyString('longitude');

        $validator
            ->integer('distance')
            ->allowEmptyString('distance');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('date')
            ->maxLength('date', 100)
            ->requirePresence('date', 'create')
            ->notEmptyString('date');

        $validator
            ->scalar('quot_time')
            // ->maxLength('quot_time', 100)
            ->requirePresence('quot_time', 'create')
            ->notEmptyString('quot_time');
        $validator
            ->integer('no_of_person')
            ->requirePresence('no_of_person', 'create')
            ->notEmptyString('no_of_person');
        $validator
            ->integer('qty')
            ->requirePresence('qty', 'create')
            ->notEmptyString('qty')
            ->greaterThanOrEqual('qty', 1, __('Value must be at least 1'));

        $validator
            ->integer('staff')
            ->allowEmptyString('staff');

        $validator
            ->notEmptyString('pament_status');

        $validator
            ->decimal('transport')
            ->notEmptyString('transport');

        $validator
            ->decimal('staff_price')
            ->allowEmptyString('staff_price');

        $validator
            ->decimal('cart_price')
            ->requirePresence('cart_price', 'create')
            ->notEmptyString('cart_price');

        $validator
            ->decimal('unit_price')
            ->requirePresence('unit_price', 'create')
            ->notEmptyString('unit_price')
            ->greaterThanOrEqual('unit_price', 1, __('Value must be at least 1'));
        $validator
            ->scalar('gst')
            ->requirePresence('gst', 'create')
            ->notEmptyString('gst');
        $validator
            ->decimal('total_amt')
            ->greaterThanOrEqual('total_amt', 1, __('Value must be at least 1'));

        $validator
            ->decimal('paid_amt')
            ->allowEmptyString('paid_amt');

        $validator
            ->decimal('remaining_amt')
            ->allowEmptyString('remaining_amt');

        $validator
            ->decimal('pay_remaining_amt')
            ->allowEmptyString('pay_remaining_amt');

        $validator
            ->scalar('remaing_amt_txn_id')
            ->allowEmptyString('remaing_amt_txn_id');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyFile('image');

        $validator
            ->notEmptyString('status');

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
        $rules->add($rules->existsIn('users_id', 'Users'), ['errorField' => 'users_id']);

        return $rules;
    }
}
