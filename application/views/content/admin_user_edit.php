<div class="inner">
	<h1>Ubah User</h1>
	<form action="<?php echo site_url('admin/user_edit_process');?>" method="post">
		<input name="id" type="hidden" value="<?php echo $result->id_user;?>">
		 
		<table class="table">
	  <tbody>
		  <tr>
			  <td>Nickname</td>
			  <td>:</td>
			  <td><input name="nickname" type="text" class="form-control" width="100%" style="padding:15px;" value="<?php echo $result->nickname;?>"></td>
		  </tr>
		  <tr>
			  <td>Username</td>
			  <td>:</td>
			  <td><input name="username" type="text" class="form-control" width="100%" style="padding:15px;" value="<?php echo $result->username;?>"></td>
		  </tr>
		  
		  <tr>
			  <td>Password</td>
			  <td>:</td>
			  <td><input name="password" type="text" class="form-control" width="100%" style="padding:15px;" value=""> *biarkan jika password tidak ingin diubah</td>
		  </tr>
		  
		  <tr>
			  <td>Lokasi</td>
			  <td>:</td>
			  <td><input name="lokasi" type="text" class="form-control" width="100%" style="padding:15px;" value="<?php echo $result->lokasi;?>"></td>
		  </tr>
		  <tr>
			  <td>Tipe</td>
			  <td>:</td>
			  <td><select name="tipe">
				  <?php 
				   if($result->tipe == 'admin') {
					   echo '<option selected="selected" value="admin">admin</option>';
					   echo '<option value="petani">petani</option>';
					   echo '<option value="distributor">distributor</option>';
				  }elseif($result->tipe == 'petani') {
					   echo '<option value="admin">admin</option>';
					   echo '<option selected="selected" value="petani">petani</option>';
					   echo '<option value="distributor">distributor</option>';
				   }else{
					   echo '<option value="admin">admin</option>';
					   echo '<option value="petani">petani</option>';
					   echo '<option selected="selected" value="distributor">distributor</option>';
				   }
				  
				  ?>
				  </select>
			</td>
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