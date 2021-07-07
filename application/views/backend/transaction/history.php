<div class="col-md-12">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <h5>Transaction History</h5>
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
                        </tr>
                        <?php endforeach; ?>
                        <?php if (empty($datas)) { ?>
                        <tr><td colspan="6" class="text-center">Data is Empty</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>