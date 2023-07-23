<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <?= $this->Flash->render() ?>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?= $this->Html->link(__('New Vendor'), ['action' => 'add'], ['class' => 'btn btn-primary float-right mb-2']) ?>
                        <h4 class="card-title">Orders</h4>
                        <div class="table-responsive">
                            <table class="table table-striped" id="orders_dt">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>ZIP</th>
                                        <th>Mobile</th>
                                        <th>Website</th>
                                        <th>GST Number</th>
                                        <th>Bank Account Number</th>
                                        <th>Bank IFSC</th>
                                        <th>Bank Name</th>
                                        <th>Bank Branch Name</th>
                                        <th>Created</th>
                                        <th>Modified</th>

                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kdVendors  as $index => $kdVendor) : ?>
                                        <tr>
                                            <td><?= $this->Number->format($index + 1) ?></td>
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
                                                <?= $this->Html->link(__('View <i class="ti-file btn-icon-append"></i>'), ['action' => 'view', $kdVendor->id], ['escape' => false, 'class' => 'btn btn-dark btn-icon-text']) ?>
                                                <?= $this->Html->link(__('Edit <i class="ti-file btn-icon-append"></i>'), ['action' => 'edit', $kdVendor->id], ['escape' => false, 'class' => 'btn btn-dark btn-icon-text']) ?>
                                                <?= $this->Form->postLink(__('Delete <i class="ti-alert btn-icon-append"></i>'), ['action' => 'delete', $kdVendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kdVendor->id), 'escape' => false, 'class' => 'btn btn-danger btn-rounded btn-fw']) ?>
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
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <!-- <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
        </div> -->
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->