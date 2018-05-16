<div class="inner">
	<h1>Ubah Produk</h1>
	<img src="<?php echo  base_url().'/assets/images/'.$result->gambar;?>" width="100" align="left" hspace="10">
	<h2><?php echo $result->nama;?></h2>
	
	<form action="<?php echo site_url('admin/produk_edit_process');?>" method="post">
		<input name="id" type="hidden" value="<?php echo $result->id_produk;?>">
		<table class="table">
	  <tbody>
		  <tr>
			  <td>Nama</td>
			  <td>:</td>
			  <td><input name="nama" type="text" class="form-control" width="100%" style="padding:15px;" value="<?php echo $result->nama;?>"></td>
		  </tr>
		  <tr>
			  <td>Keterangan</td>
			  <td>:</td>
			  <td><textarea name="keterangan"class="form-control" width="100%" style="padding:15px;"><?php echo $result->keterangan;?></textarea></td>
		  </tr>
		   <tr>
			  <td>Harga</td>
			  <td>:</td>
			  <td><input name="harga" type="text" class="form-control" width="100%" style="padding:15px;" value="<?php echo $result->harga;?>"></td>
		  </tr>
		  <tr>
			  <td>Stok</td>
			  <td>:</td>
			  <td><input name="stok" type="text" class="form-control" width="100%" style="padding:15px;" value="<?php echo $result->stok;?>"></td>
		  </tr>
		  
		  <tr>
			  <td>Min pembelian</td>
			  <td>:</td>
			  <td><input name="min_pembelian" type="text" class="form-control" width="100%" style="padding:15px;" value="<?php echo $result->min_pembelian;?>"></td>
		  </tr>
		  
		   <tr>
			  <td>Dilihat</td>
			  <td>:</td>
			  <td><input name="dilihat" type="text" class="form-control" width="100%" style="padding:15px;" value="<?php echo $result->dilihat;?>"></td>
		  </tr>
		  
		   <tr>
			  <td>Status</td>
			  <td>:</td>
			  <td><select name="status">
				  <?php 
				   if($result->status == 1) {
					   echo '<option selected="selected" value="1">aktif</option>';
					   echo '<option value="0">non aktif</option>';
				   }else{
					   echo '<option  value="1">aktif</option>';
					   echo '<option selected="selected" value="0">non aktif</option>';
				   }
				  
				  ?>
				  </select>
			</td>
		  </tr>
		  <tr>
			  <td></td>
			  <td></td>
			  <td><input type="submit" name="submit" value="Ubah data">
			</td>
		  </tr>
			   
	  </tbody>
	</table>
	</form>	

</div>