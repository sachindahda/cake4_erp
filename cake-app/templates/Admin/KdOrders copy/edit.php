<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KdOrder $kdOrder
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kdOrder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kdOrder->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kdOrders form content">
            <?= $this->Form->create($kdOrder) ?>
            <fieldset>
                <legend><?= __('Edit Order') ?></legend>
                <?php
                    echo $this->Form->control('is_exist');
                    echo $this->Form->control('txn_id');
                    echo $this->Form->control('referral_id');
                    echo $this->Form->control('type');
                    echo $this->Form->control('booking_type');
                    echo $this->Form->control('users_id', ['options' => $users]);
                    echo $this->Form->control('package');
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('contact');
                    echo $this->Form->control('venue_address');
                    echo $this->Form->control('latitude');
                    echo $this->Form->control('longitude');
                    echo $this->Form->control('distance');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('date');
                    echo $this->Form->control('quot_time');
                    echo $this->Form->control('qty');
                    echo $this->Form->control('staff');
                    echo $this->Form->control('pament_status');
                    echo $this->Form->control('transport');
                    echo $this->Form->control('staff_price');
                    echo $this->Form->control('cart_price');
                    echo $this->Form->control('unit_price');
                    echo $this->Form->control('total_amt');
                    echo $this->Form->control('paid_amt');
                    echo $this->Form->control('remaining_amt');
                    echo $this->Form->control('pay_remaining_amt');
                    echo $this->Form->control('remaing_amt_txn_id');
                    echo $this->Form->control('description');
                    echo $this->Form->control('image');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
