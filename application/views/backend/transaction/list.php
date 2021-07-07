<div class="col-md-12">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <h5>Transaction Waiting Payment</h5>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-inverse">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Expired Date</th>
                            <th>Total</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datas as $row): ?>
                        <tr>
                            <td><?=$row->transaction_code?></td>
                            <td><?=$row->fullname?></td>
                            <td><?=$row->status?></td>
                            <td><?=$row->create_date?></td>
                            <td><?=$row->expired_date?></td>
                            <td><?="Rp " . number_format($row->total_price,0,',','.')?></td>
                            <td class="text-center">
                                <a href="<?=site_url('backend/transaction/pay/'.$row->id_transaction)?>" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-money-bill-wave-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if (empty($datas)) { ?>
                        <tr><td colspan="7" class="text-center">Data is Empty</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>