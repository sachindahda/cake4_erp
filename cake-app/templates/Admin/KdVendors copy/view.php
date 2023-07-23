<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KdVendor $kdVendor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Kd Vendor'), ['action' => 'edit', $kdVendor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Kd Vendor'), ['action' => 'delete', $kdVendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kdVendor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Kd Vendors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Kd Vendor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kdVendors view content">
            <h3><?= h($kdVendor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($kdVendor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($kdVendor->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($kdVendor->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip') ?></th>
                    <td><?= h($kdVendor->zip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($kdVendor->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($kdVendor->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gst Number') ?></th>
                    <td><?= h($kdVendor->gst_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Account Number') ?></th>
                    <td><?= h($kdVendor->bank_account_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Ifsc') ?></th>
                    <td><?= h($kdVendor->bank_ifsc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Name') ?></th>
                    <td><?= h($kdVendor->bank_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bank Branch Name') ?></th>
                    <td><?= h($kdVendor->bank_branch_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($kdVendor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($kdVendor->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($kdVendor->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kdVendor->address)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('State') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kdVendor->state)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Country') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($kdVendor->country)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
