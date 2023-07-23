<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <?= $this->Flash->render() ?>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'btn btn-primary float-right mb-2']) ?>
                        <h4 class="card-title">Orders</h4>
                        <!-- <p class="card-description">
                            Add class <code>.table-striped</code>
                        </p> -->
                        <div class="table-responsive">
                            <table class="table table-striped" id="orders_dt">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Booking Type</th>
                                        <th>Package</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Date</th>
                                        <th>Quot Time</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th>No. of Person</th>
                                        <th>GST</th>
                                        <th>Transport</th>
                                        <th>Staff Price</th>
                                        <th>Cart Price</th>
                                        <th>Total Amount</th>
                                        <th>Paid Amount</th>
                                        <th>Remaining Amount</th>
                                        <th>Pay Remaining Amount</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kdOrders  as $index => $kdOrder) : ?>
                                        <tr>
                                            <td><?= $this->Number->format($index + 1) ?></td>
                                            <td><?= h($kdOrder->booking_type) ?></td>
                                            <td><?= h($kdOrder->package) ?></td>
                                            <td><?= h($kdOrder->name) ?></td>
                                            <td><?= h($kdOrder->email) ?></td>
                                            <td><?= h($kdOrder->contact) ?></td>
                                            <td><?= h($kdOrder->city) ?></td>
                                            <td><?= h($kdOrder->state) ?></td>
                                            <td><?= h($kdOrder->date) ?></td>
                                            <td><?= h($kdOrder->quot_time) ?></td>
                                            <td><?= $kdOrder->qty === null ? '' : $this->Number->format($kdOrder->qty) ?></td>
                                            <td><?= $this->Number->format($kdOrder->unit_price) ?></td>

                                            <td><?= $kdOrder->no_of_person === null ? '' : $this->Number->format($kdOrder->no_of_person) ?></td>
                                            <td><?= $kdOrder->gst ?>%</td>
                                            <td><?= $this->Number->format($kdOrder->transport) ?></td>
                                            <td><?= $kdOrder->staff_price === null ? '' : $this->Number->format($kdOrder->staff_price) ?></td>
                                            <td><?= $kdOrder->cart_price === null ? '' : $this->Number->format($kdOrder->cart_price) ?></td>
                                            <td><?= $kdOrder->total_amt === null ? '' : $this->Number->format($kdOrder->total_amt) ?></td>
                                            <td><?= $kdOrder->paid_amt === null ? '' : $this->Number->format($kdOrder->paid_amt) ?></td>
                                            <td><?= $kdOrder->remaining_amt === null ? '' : $this->Number->format($kdOrder->remaining_amt) ?></td>
                                            <td><?= $kdOrder->pay_remaining_amt === null ? '' : $this->Number->format($kdOrder->pay_remaining_amt) ?></td>
                                            <td><?= h($kdOrder->created) ?></td>
                                            <td><?= h($kdOrder->modified) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('Edit <i class="ti-file btn-icon-append"></i>'), ['action' => 'edit', $kdOrder->id],['escape' => false, 'class' => 'btn btn-dark btn-icon-text']) ?>
                                                <?= $this->Form->postLink(__('Delete <i class="ti-alert btn-icon-append"></i>'), ['action' => 'delete', $kdOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kdOrder->id),'escape' => false, 'class' => 'btn btn-danger btn-rounded btn-fw']) ?>
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