<div class="col-md-12">
    <div class="card">
        <div class="card-body table-border-style">
            <h5 class="mt-5">Product Form</h5>
            <hr>
            <form action="<?php echo site_url('backend/master/product/save') ?>" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Code</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="product_code" placeholder="product code" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="product_name" placeholder="product name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Stock</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="stock" placeholder="product stock" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="price" placeholder="product price" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" name="description" placeholder="product description" required></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Product Image</label>
                    <div class="col-sm-5">
                        <input type="file" class="form-control-file" name="photo_product" id="imgInp">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-5">
                        <img id="blah" alt="300x280" src="<?=base_url()?>assets/img/default.png" width="300px;" />
                    </div>
                </div>
                <a href="<?=site_url('backend/master/product')?>" class="btn btn-outline-warning"> Back</a>
                <button type="submit" class="btn btn-outline-primary"> Save</button>
            </form>
        </div>
    </div>
</div>