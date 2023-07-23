<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\KdOrder> $kdOrders
 */
?>
<div class="kdOrders index content">
    <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('is_exist') ?></th>
                    <th><?= $this->Paginator->sort('referral_id') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('booking_type') ?></th>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('package') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('contact') ?></th>
                    <th><?= $this->Paginator->sort('latitude') ?></th>
                    <th><?= $this->Paginator->sort('longitude') ?></th>
                    <th><?= $this->Paginator->sort('distance') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('quot_time') ?></th>
                    <th><?= $this->Paginator->sort('qty') ?></th>
                    <th><?= $this->Paginator->sort('staff') ?></th>
                    <th><?= $this->Paginator->sort('pament_status') ?></th>
                    <th><?= $this->Paginator->sort('transport') ?></th>
                    <th><?= $this->Paginator->sort('staff_price') ?></th>
                    <th><?= $this->Paginator->sort('cart_price') ?></th>
                    <th><?= $this->Paginator->sort('unit_price') ?></th>
                    <th><?= $this->Paginator->sort('total_amt') ?></th>
                    <th><?= $this->Paginator->sort('paid_amt') ?></th>
                    <th><?= $this->Paginator->sort('remaining_amt') ?></th>
                    <th><?= $this->Paginator->sort('pay_remaining_amt') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kdOrders as $kdOrder): ?>
                <tr>
                    <td><?= $this->Number->format($kdOrder->id) ?></td>
                    <td><?= h($kdOrder->is_exist) ?></td>
                    <td><?= h($kdOrder->referral_id) ?></td>
                    <td><?= h($kdOrder->type) ?></td>
                    <td><?= h($kdOrder->booking_type) ?></td>
                    <td><?= $kdOrder->has('user') ? $this->Html->link($kdOrder->user->id, ['controller' => 'Users', 'action' => 'view', $kdOrder->user->id]) : '' ?></td>
                    <td><?= h($kdOrder->package) ?></td>
                    <td><?= h($kdOrder->name) ?></td>
                    <td><?= h($kdOrder->email) ?></td>
                    <td><?= h($kdOrder->contact) ?></td>
                    <td><?= h($kdOrder->latitude) ?></td>
                    <td><?= h($kdOrder->longitude) ?></td>
                    <td><?= $kdOrder->distance === null ? '' : $this->Number->format($kdOrder->distance) ?></td>
                    <td><?= h($kdOrder->city) ?></td>
                    <td><?= h($kdOrder->state) ?></td>
                    <td><?= h($kdOrder->date) ?></td>
                    <td><?= h($kdOrder->quot_time) ?></td>
                    <td><?= $kdOrder->qty === null ? '' : $this->Number->format($kdOrder->qty) ?></td>
                    <td><?= $kdOrder->staff === null ? '' : $this->Number->format($kdOrder->staff) ?></td>
                    <td><?= $this->Number->format($kdOrder->pament_status) ?></td>
                    <td><?= $this->Number->format($kdOrder->transport) ?></td>
                    <td><?= $kdOrder->staff_price === null ? '' : $this->Number->format($kdOrder->staff_price) ?></td>
                    <td><?= $kdOrder->cart_price === null ? '' : $this->Number->format($kdOrder->cart_price) ?></td>
                    <td><?= $this->Number->format($kdOrder->unit_price) ?></td>
                    <td><?= $kdOrder->total_amt === null ? '' : $this->Number->format($kdOrder->total_amt) ?></td>
                    <td><?= $kdOrder->paid_amt === null ? '' : $this->Number->format($kdOrder->paid_amt) ?></td>
                    <td><?= $kdOrder->remaining_amt === null ? '' : $this->Number->format($kdOrder->remaining_amt) ?></td>
                    <td><?= $kdOrder->pay_remaining_amt === null ? '' : $this->Number->format($kdOrder->pay_remaining_amt) ?></td>
                    <td><?= h($kdOrder->image) ?></td>
                    <td><?= $this->Number->format($kdOrder->status) ?></td>
                    <td><?= h($kdOrder->created) ?></td>
                    <td><?= h($kdOrder->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kdOrder->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kdOrder->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kdOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kdOrder->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
