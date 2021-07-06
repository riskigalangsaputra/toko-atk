<section class="py-5">
	<div class="container px-4 px-lg-5 my-5">
		<div class="row gx-4 gx-lg-5 align-items-center">
			<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<?php echo $this->session->flashdata('success'); ?> <i class="fas fa-check"></i>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php endif; ?>
			<table class="table table-bordered border-primary">
				<thead>
					<tr class="text-center">
						<th>Akti</th>
						<th>Nama Produk</th>
						<th>Qty</th>
						<th>Harga Satuan Produk</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php $subtotal = 0;?>
					<?php foreach ($carts as $row): ?>
					<?php $subtotal += $row->total; ?>
					<tr>
						<td class="text-center">
							<a href="<?=site_url('cart/delete/'. $row->id_cart)?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
						</td>
						<td class="text-center"><?=$row->product_name?></td>
						<td class="text-center"><?=$row->product_qty?></td>
						<td class="text-center"><?="Rp " . number_format($row->product_price,0,',','.')?></td>
						<td class="text-center"><?="Rp " . number_format($row->total,0,',','.')?></td>
					</tr>
					<?php endforeach; ?>
					<tr>
						<th colspan="4" style="text-align: right;">Subtotal</th>
						<th class="text-center"><?="Rp " . number_format($subtotal,0,',','.')?></th>
					</tr>
					<?php if (empty($carts)) { ?>
					<tr><td colspan="5" class="text-center">Cart is empty</td></tr>
					<?php } ?>
				</tbody>
			</table>
			<table class="table table-bordered">
				<tr>
					<td style="text-align: right;"><a href="<?=site_url("transaction/checkout")?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-shopping-bag"></i> Checkout</a></td>
				</tr>
			</table>
		</div>
	</div>
</section>