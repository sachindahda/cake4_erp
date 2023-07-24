<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KdVendor $kdVendor
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="main-panel">
    <div class="content-wrapper">
        <?= $this->Flash->render() ?>
        <?php
        $action = 'Create';
        if ($this->request->getParam('action') == 'edit') {
            $action = 'Edit';
        }
        ?>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?= $action ?> Vendor</h4>

                        <?= $this->Form->create($kdVendor, [
                            'novalidate' => true,
                            'templates' => [

                                'formGroup' => '<div class="form-group row">{{label}}{{col}}<div class="input {{type}} {{required}} col-sm-9">{{input}}{{error}}</div></div>',
                                'label' => '<label class="col-sm-3 col-form-label">{{text}}</label>',
                                'inputContainer' => '{{content}}',



                            ]
                        ]) ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('name', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('email', ['class' => 'form-control']) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('address', ['class' => 'form-control']) ?>

                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('city', ['class' => 'form-control']) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('state', ['class' => 'form-control']) ?>

                            </div>

                            <div class="col-md-6">
                                <?= $this->Form->control('zip', ['class' => 'form-control']) ?>
                            </div>





                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('country', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('mobile', ['class' => 'form-control']) ?>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('website', ['class' => 'form-control']) ?>

                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('gst_number', ['class' => 'form-control']) ?>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('bank_account_number', ['class' => 'form-control', 'id' => 'unit_price', 'min' => 1]) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('bank_ifsc', ['class' => 'form-control', 'min' => 1]) ?>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('bank_name', ['class' => 'form-control']) ?>

                            </div>

                            <div class="col-md-6">
                                <?= $this->Form->control('bank_branch_name', ['class' => 'form-control']) ?>

                            </div>

                        </div>

                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(
                            'Cancel',
                            ['_name' => 'kd_orders'],
                            ['escape' => false, 'class' => 'btn btn-secondary', 'url' => ['base' => false]]
                        ); ?>
                        <?= $this->Form->end() ?>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
<script>
    $(document).ready(() => {
        erp_js.init();
        console.log(erp_js);
    })
</script>