<?php if(!class_exists('raintpl')){exit;}?><?php if( isset($_GET['message']) && $_GET['message'] ==
'mailerror' ){ ?>
<div class="alert alert-danger">This email it's not Valid</div>
<?php }elseif( isset($_GET['message']) && $_GET['message'] ==
'fielderror' ){ ?>
<div class="alert alert-danger">You must fill all fields</div>
<?php }elseif( isset($_GET['message']) && $_GET['message'] ==
'usernamerror' ){ ?>
<div class="alert alert-danger">This username's used you must use
	another!</div>
<?php }elseif( isset($_GET['message']) && $_GET['message'] ==
'emailerror' ){ ?>
<div class="alert alert-danger">This Email's used you must use
	another!</div>
<?php }elseif( isset($_GET['message']) && $_GET['message'] ==
'error' ){ ?>
<div class="alert alert-danger">Error! Please contact the
	developper</div>
<?php }elseif( isset($_GET['message']) && $_GET['message'] ==
'done' ){ ?>
<div class="alert alert-success">Welcome to your account!</div>
<?php } ?>



<form method="post" action="<?php echo $base_url;?>?view=user&f=doregister">
	<div class="form-group">
		<label>Username</label> <input type="text" name="username"
			class="form-control" id="exampleInputEmail1" required="required"
			placeholder="Username">
	</div>
	<div class="form-group">
		<label>Password</label> <input type="password" name="password"
			class="form-control" id="exampleInputPassword1" required="required"
			placeholder="Password">
	</div>
	<div class="form-group">
		<label>Email address</label> <input type="email" name="email"
			class="form-control" id="exampleInputEmail1" required="required"
			placeholder="Email">
	</div>

	<button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>