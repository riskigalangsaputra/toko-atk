<div class="col-md-12">
    <div class="card">
        <div class="card-body table-border-style">
            <h5 class="mt-5">Product Form</h5>
            <hr>
            <form action="<?php echo site_url('backend/master/product/update') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $datas->id_product?>" />
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Code</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="product_code" value="<?php echo $datas->product_code?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="product_name" value="<?php echo $datas->product_name?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Stock</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="stock" value="<?php echo $datas->stock?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="price" value="<?php echo $datas->price?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Description</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" name="description" required><?php echo $datas->description?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Product Image</label>
                    <div class="col-sm-5">
                        <input type="hidden" name="old_image" value="<?php echo $datas->photo_product ?>">
                        <input type="file" class="form-control-file" name="photo_product" id="imgInp">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-5">
                        <img id="blah" alt="300x280" src="<?=base_url('assets/uploads/'.$datas->photo_product) ?>" width="300px;" />
                    </div>
                </div>
                <a href="<?=site_url('backend/master/product')?>" class="btn btn-outline-warning"> Back</a>
                <button type="submit" class="btn btn-outline-primary"> Update</button>
            </form>
        </div>
    </div>
</div>