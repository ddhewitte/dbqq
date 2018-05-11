  <div class="container">

      <form class="form-signin" method="post" action="<?php echo site_url('login/proses'); ?>">
		<?php if(isset($err_message)){ ?> 
			<div class="alert alert-danger">
				<?php echo $err_message;?>
			</div>
		<?php } ?>
		  
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
		  <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->