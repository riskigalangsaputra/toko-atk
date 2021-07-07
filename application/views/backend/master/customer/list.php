<div class="col-md-12">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <h5>List Customers</h5>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-inverse">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datas as $row): ?>
                        <tr>
                            <td><?=$row->fullname?></td>
                            <td><?=$row->email?></td>
                            <td><?=$row->phone?></td>
                            <td><?=$row->role?></td>
                            <td>
                                <?php if ($row->is_active == 1) { ?>
                                <span class="text-primary">Aktif</span>
                                <?php } else {?>
                                    <span class="text-danger">Tidak Aktif</span>
                                <?php }?>
                            </td>
                            <td>
                                <?php if ($row->is_active == 1) { ?>
                                <a href="<?=site_url('backend/master/customers/active/'.$row->id_user)?>" class="btn btn-outline-danger btn-sm">
                                    <i class="fa fa-check"></i>
                                </a>
                                <?php } else {?>
                                     <a href="<?=site_url('backend/master/customers/active/'.$row->id_user)?>" class="btn btn-outline-success btn-sm">
                                    <i class="fa fa-check"></i>
                                </a>
                                <?php }?>
                                
                            </td>
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