<div class="col-md-12">

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            <h5>List Product</h5>
            <a href="<?=base_url('backend/master/product/form')?>" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Add New Product</a>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-inverse">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datas as $row): ?>
                        <tr>
                            <td><?=$row->product_code?></td>
                            <td><?=$row->product_name?></td>
                            <td><?=$row->stock?></td>
                            <td><?=$row->price?></td>
                            <td>
                                <?php if ($row->photo_product == 'default.png') {?>
                                <img src="<?=base_url()?>assets/img/default.png" width="60px;"/>
                                <?php } else { ?>
                                <img src="<?php echo base_url('assets/uploads/'.$row->photo_product) ?>" width="64" />
                                <?php } ?>
                            </td>
                            <td>
                                <a href="<?=site_url('backend/master/product/edit/'.$row->id_product)?>" class="btn btn-outline-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?=site_url('backend/master/product/delete/'.$row->id_product)?>" class="btn btn-outline-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
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