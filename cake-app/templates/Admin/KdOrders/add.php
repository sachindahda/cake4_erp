<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KdOrder $kdOrder
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
                        <h4 class="card-title"><?= $action ?> Order</h4>

                        <?= $this->Form->create($kdOrder, [
                            'novalidate' => true,
                            'templates' => [

                                'formGroup' => '<div class="form-group row">{{label}}{{col}}<div class="input {{type}} {{required}} col-sm-9">{{input}}{{error}}</div></div>',
                                'label' => '<label class="col-sm-3 col-form-label">{{text}}</label>',
                                'inputContainer' => '{{content}}',



                            ]
                        ]) ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('package', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('name', ['class' => 'form-control']) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('email', ['class' => 'form-control']) ?>

                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('contact', ['class' => 'form-control']) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Form->control('venue_address', ['class' => 'form-control']) ?>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('city', ['class' => 'form-control']) ?>
                            </div>

                            <div class="col-md-6">
                                <?= $this->Form->control('state', ['class' => 'form-control']) ?>
                            </div>



                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <?= $this->Form->date('date', ['class' => 'form-control']) ?>
                                        <?= $this->Form->error('date') ?>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Time</label>
                                    <div class="col-sm-9">
                                        <?= $this->Form->time('quot_time', ['class' => 'form-control']) ?>
                                        <?= $this->Form->error('quot_time') ?>

                                    </div>
                                </div>

                            </div>


                        </div>
                        <di class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('no_of_person', ['class' => 'form-control']) ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('unit_price', ['class' => 'form-control', 'id' => 'unit_price', 'min' => 1]) ?>
                            </div>
                        </di>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('qty', ['class' => 'form-control', 'min' => 1]) ?>

                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('cart_price', ['class' => 'form-control', 'id' => 'cart_price', 'readonly' => true]) ?>

                            </div>

                        </div>
                        <hr style="  border-top: 3px double #8c8b8b;">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">GST</label>
                                    <div class="col-sm-8">
                                        <?= $this->Form->select('gst', [
                                            '5' => '5%',
                                            '12' => '12%',
                                            '18' => '18%',
                                            '28' => '28%',
                                        ], ['class' => 'form-control', 'id' => 'gst', 'empty' => 'Select an Option']) ?>
                                        <?= $this->Form->error('gst') ?>

                                    </div>
                                    <div class="col-sm-2">
                                        <?php
                                        $gst_amount = 0;
                                        if (isset($kdOrder->gst) && !empty($kdOrder->gst) && isset($kdOrder->cart_price) && !empty($kdOrder->cart_price)) {
                                            $gst_amount = number_format(($kdOrder->cart_price * $kdOrder->gst) / 100, 2);
                                        }
                                        ?>
                                        Rs. <p id="gst_amount"><?= $gst_amount; ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('transport', ['class' => 'form-control', 'id' => 'transport_price']) ?>

                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('staff_price', ['class' => 'form-control', 'id' => 'staff_price']) ?>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <?= $this->Form->control('total_amt', ['class' => 'form-control', 'readonly' => true, 'id' => 'total_amt']) ?>

                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('paid_amt', ['class' => 'form-control', 'id' => 'paid_amt']) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('remaining_amt', ['class' => 'form-control', 'id' => 'remaining_amt', 'readonly' => true,]) ?>

                            </div>
                            <div class="col-md-6">

                                <?= $this->Form->control('pay_remaining_amt', ['class' => 'form-control']) ?>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <?= $this->Form->control('description', ['class' => 'form-control']) ?>
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