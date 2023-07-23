<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KdOrder $kdOrder
 */
// pr($kdOrder);die;
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $kdOrder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $kdOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kdOrder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kdOrders view content">
            <h3><?= h($kdOrder->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Is Exist') ?></th>
                    <td><?= h($kdOrder->is_exist) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referral Id') ?></th>
                    <td><?= h($kdOrder->referral_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($kdOrder->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Booking Type') ?></th>
                    <td><?= h($kdOrder->booking_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $kdOrder->has('user') ? $this->Html->link($kdOrder->user->username, ['controller' => 'Users', 'action' => 'view', $kdOrder->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Package') ?></th>
                    <td><?= h($kdOrder->package) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($kdOrder->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($kdOrder->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($kdOrder->contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Latitude') ?></th>
                    <td><?= h($kdOrder->latitude) ?></td>
                </tr>
                <tr>
                    <th><?= __('Longitude') ?></th>
                    <td><?= h($kdOrder->longitude) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($kdOrder->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($kdOrder->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($kdOrder->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quot Time') ?></th>
                    <td><?= h($kdOrder->quot_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($kdOrder->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($kdOrder->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($kdOrder->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($kdOrder->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Distance') ?></th>
                    <td><?= $kdOrder->distance === null ? '' : $this->Number->format($kdOrder->distance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qty') ?></th>
                    <td><?= $kdOrder->qty === null ? '' : $this->Number->format($kdOrder->qty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= $kdOrder->staff === null ? '' : $this->Number->format($kdOrder->staff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pament Status') ?></th>
                    <td><?= $this->Number->format($kdOrder->pament_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transport') ?></th>
                    <td><?= $this->Number->format($kdOrder->transport) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Price') ?></th>
                    <td><?= $kdOrder->staff_price === null ? '' : $this->Number->format($kdOrder->staff_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cart Price') ?></th>
                    <td><?= $kdOrder->cart_price === null ? '' : $this->Number->format($kdOrder->cart_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unit Price') ?></th>
                    <td><?= $this->Number->format($kdOrder->unit_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Amt') ?></th>
                    <td><?= $kdOrder->total_amt === null ? '' : $this->Number->format($kdOrder->total_amt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paid Amt') ?></th>
                    <td><?= $kdOrder->paid_amt === null ? '' : $this->Number->format($kdOrder->paid_amt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remaining Amt') ?></th>
                    <td><?= $kdOrder->remaining_amt === null ? '' : $this->Number->format($kdOrder->remaining_amt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay Remaining Amt') ?></th>
                    <td><?= $kdOrder->pay_remaining_amt === null ? '' : $this->Number->format($kdOrder->pay_remaining_amt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($kdOrder->status) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Txn Id') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kdOrder->txn_id)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Venue Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kdOrder->venue_address)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Remaing Amt Txn Id') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kdOrder->remaing_amt_txn_id)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kdOrder->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
