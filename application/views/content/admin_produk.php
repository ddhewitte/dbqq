<div class="inner">
	<h1>Manage Produk</h1>
	<table class="table table-striped">
	  <thead class="thead-dark">
		<tr>
		  <th scope="col">Id produk</th>
		  <th scope="col">Gambar</th>
		  <th scope="col">Nama</th>
		  <th scope="col">Keterangan</th>
		  <th scope="col">Harga</th>
		  <th scope="col">Stok</th>
		  <th scope="col">Min pembelian</th>
		  <th scope="col">Dilihat</th>
		  <th scope="col">Status</th>
		  <th scope="col"></th>
		</tr>
	  </thead>
	  <tbody>
		  <?php
		      foreach($result->result() as $row) { 
		  ?>
		<tr>
		  <th scope="row"><?php echo $row->id_produk ?></th>
		  <td><img src="<?php echo  base_url().'/assets/images/'.$row->gambar;?>" width="100"></td>
		  <td><?php echo $row->nama ?></td>
		  <td><?php echo $row->keterangan ?></td>
		  <td><?php echo $row->harga ?></td>
		  <td><?php echo $row->stok ?></td>
		  <td><?php echo $row->min_pembelian ?></td>
		  <td><?php echo $row->dilihat ?></td>
		  <td><?php if($row->status == 1){ echo 'Aktif'; }else{ echo 'Tidak Aktif'; } ?></td>
		  <td><a class="btn btn-primary" href="<?php echo site_url('admin/produk_edit/'.$row->id_produk); ?>">ubah</a> | <a class="btn btn-danger" href="<?php echo site_url('admin/produk_del/'.$row->id_produk); ?>" onclick="return confirm('Yakin ingin menghapus?')">hapus</a></td>
		</tr>
		<?php } ?>
	  </tbody>
	</table>

</div>