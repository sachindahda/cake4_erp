<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KdOrder $kdOrder
 */
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">


                        <h3 class="card-title">Order Details</h3>
                        <table class="table table-striped">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($kdOrder->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Booking Type') ?></th>
                                <td><?= h($kdOrder->booking_type) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Package') ?></th>
                                <td><?= h($kdOrder->package) ?></td>
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
                                <th><?= __('Qty') ?></th>
                                <td><?= $kdOrder->qty === null ? '' : $this->Number->format($kdOrder->qty) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Unit Price') ?></th>
                                <td><?= $this->Number->format($kdOrder->unit_price) ?></td>
                            </tr>

                            <tr>
                                <th><?= __('No. of Person') ?></th>
                                <td><?= $kdOrder->no_of_person === null ? '' : $this->Number->format($kdOrder->no_of_person) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Cart Price') ?></th>
                                <td><?= $kdOrder->cart_price === null ? '' : $this->Number->format($kdOrder->cart_price) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('GST %age') ?></th>
                                <td><?= $this->Number->format($kdOrder->gst) ?>%</td>
                            </tr>
                            <tr>
                                <th><?= __('Transport Amount') ?></th>
                                <td><?= $this->Number->format($kdOrder->transport) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Staff Price') ?></th>
                                <td><?= $kdOrder->staff_price === null ? '' : $this->Number->format($kdOrder->staff_price) ?></td>
                            </tr>

                            <tr>
                                <th><?= __('Total Amount') ?></th>
                                <td><?= $kdOrder->total_amt === null ? '' : $this->Number->format($kdOrder->total_amt) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Paid Amount') ?></th>
                                <td><?= $kdOrder->paid_amt === null ? '' : $this->Number->format($kdOrder->paid_amt) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Remaining Amount') ?></th>
                                <td><?= $kdOrder->remaining_amt === null ? '' : $this->Number->format($kdOrder->remaining_amt) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Pay Remaining Amount') ?></th>
                                <td><?= $kdOrder->pay_remaining_amt === null ? '' : $this->Number->format($kdOrder->pay_remaining_amt) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Description') ?></th>
                                <td><?= $this->Text->autoParagraph(h($kdOrder->description)) ?></td>
                            </tr>

                            <tr>
                                <th><?= __('Created') ?></th>
                                <td><?= h($kdOrder->created) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= h($kdOrder->modified) ?></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    table {
        table-layout: fixed;
        width: 100%;
    }

    td p {
        word-wrap: break-word;
        white-space: normal;
    }

    /* Optionally, you can style the table borders */
    /* table,
    th,
    td {
        border: 1px solid black;
    } */
</style>