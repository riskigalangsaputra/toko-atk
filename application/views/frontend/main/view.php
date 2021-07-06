<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <?php if ($row->photo_product == null) {?>
                <img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />
                <?php } else { ?>
                <img class="card-img-top mb-5 mb-md-0" src="<?=base_url('assets/uploads/'.$row->photo_product) ?>" alt="..." />
                <?php } ?>
                
            </div>
            <div class="col-md-6">
                <div class="small mb-1">Stock: <?=$row->stock?></div>
                <h1 class="display-5 fw-bolder"><?=ucwords($row->product_name)?></h1>
                <div class="fs-5 mb-5">
                    <?php
                    $rupiah = "Rp " . number_format($row->price,2,',','.');
                    ?>
                    <span><?=$rupiah?></span>
                    <!-- <span class="text-decoration-line-through">$40.00</span> -->
                </div>
                <p class="lead"><?=$row->description?></p>
                <form action="<?php echo site_url('cart/add') ?>" method="post">
                    <div class="d-flex">
                        <input type="hidden" name=id_product value="<?=$row->id_product?>" />
                        <input class="form-control text-center me-3" id="inputQuantity" type="number" name=qty value="1" style="max-width: 3rem" />
                        <button type="submit" class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="fas fa-shopping-cart"></i>
                            Add to cart
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>