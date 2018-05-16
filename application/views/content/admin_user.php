<div class="inner">
	<h1>Manage User</h1>
	<table class="table table-striped">
	  <thead class="thead-dark">
		<tr>
		  <th scope="col">Id user</th>
		  <th scope="col">Nickname</th>
		  <th scope="col">Lokasi</th>
		  <th scope="col">Tipe</th>
		  <th scope="col">Status</th>
		  <th scope="col"></th>
		</tr>
	  </thead>
	  <tbody>
		  <?php
		      foreach($result->result() as $row) { 
		  ?>
		<tr>
		  <th scope="row"><?php echo $row->id_user ?></th>
		  <td><?php echo $row->nickname ?></td>
		  <td><?php echo $row->lokasi ?></td>
		  <td><?php echo $row->tipe ?></td>
		  <td><?php if($row->status == 1){ echo 'Aktif'; }else{ echo 'Tidak Aktif'; } ?></td>
			<td><a class="btn btn-primary" href="<?php echo site_url('admin/user_edit/'.$row->id_user); ?>">ubah</a> | <a class="btn btn-danger" href="<?php echo site_url('admin/user_del/'.$row->id_user); ?>" onclick="return confirm('Yakin ingin menghapus?')">hapus</a></td>
		</tr>
		<?php } ?>
	  </tbody>
	</table>

</div>