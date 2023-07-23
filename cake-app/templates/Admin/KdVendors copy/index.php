<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\KdVendor> $kdVendors
 */
?>
<div class="kdVendors index content">
    <?= $this->Html->link(__('New Kd Vendor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Kd Vendors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('zip') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('website') ?></th>
                    <th><?= $this->Paginator->sort('gst_number') ?></th>
                    <th><?= $this->Paginator->sort('bank_account_number') ?></th>
                    <th><?= $this->Paginator->sort('bank_ifsc') ?></th>
                    <th><?= $this->Paginator->sort('bank_name') ?></th>
                    <th><?= $this->Paginator->sort('bank_branch_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kdVendors as $kdVendor): ?>
                <tr>
                    <td><?= $this->Number->format($kdVendor->id) ?></td>
                    <td><?= h($kdVendor->name) ?></td>
                    <td><?= h($kdVendor->email) ?></td>
                    <td><?= h($kdVendor->city) ?></td>
                    <td><?= h($kdVendor->zip) ?></td>
                    <td><?= h($kdVendor->mobile) ?></td>
                    <td><?= h($kdVendor->website) ?></td>
                    <td><?= h($kdVendor->gst_number) ?></td>
                    <td><?= h($kdVendor->bank_account_number) ?></td>
                    <td><?= h($kdVendor->bank_ifsc) ?></td>
                    <td><?= h($kdVendor->bank_name) ?></td>
                    <td><?= h($kdVendor->bank_branch_name) ?></td>
                    <td><?= h($kdVendor->created) ?></td>
                    <td><?= h($kdVendor->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $kdVendor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kdVendor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kdVendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kdVendor->id)]) ?>
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
