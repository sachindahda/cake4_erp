<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KdVendor $kdVendor
 */
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">


                        <h3 class="card-title">Vendor Details</h3>
                        <table class="table table-striped">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($kdVendor->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Email') ?></th>
                                <td><?= h($kdVendor->email) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Address') ?></th>
                                <td><?= $this->Text->autoParagraph(h($kdVendor->address)) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('City') ?></th>
                                <td><?= h($kdVendor->city) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('State') ?></th>
                                <td><?= h($kdVendor->state) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Country') ?></th>
                                <td><?= h($kdVendor->country) ?></td>
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
                                <th><?= __('Created') ?></th>
                                <td><?= h($kdVendor->created) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= h($kdVendor->modified) ?></td>
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