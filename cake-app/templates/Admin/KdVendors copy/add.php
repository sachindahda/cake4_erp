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
            <?= $this->Html->link(__('List Kd Vendors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="kdVendors form content">
            <?= $this->Form->create($kdVendor) ?>
            <fieldset>
                <legend><?= __('Add Kd Vendor') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('address');
                    echo $this->Form->control('city');
                    echo $this->Form->control('state');
                    echo $this->Form->control('zip');
                    echo $this->Form->control('country');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('website');
                    echo $this->Form->control('gst_number');
                    echo $this->Form->control('bank_account_number');
                    echo $this->Form->control('bank_ifsc');
                    echo $this->Form->control('bank_name');
                    echo $this->Form->control('bank_branch_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
