<form name="registration" action="" method="post" enctype="multipart/form-data" id="UserSignupForm">
<div class="row row-balancer">
    <div class="first-span span11 box box-color">
		<h3 class="span3 margin-left-15 pull-left">Add User</h3>
		<span class=" span3 pull-right"><h5><font color="red"><sup> * </sup></font>FIELDS ARE MANDATORY</h5> </span>
		<div class="clear"></div>
		<hr>
		<div class="margin-left-30">
		<fieldset style="width:90%;">
				
		<div class="pull-left">
			<h3>Personal Information:</h3>
			<div class="">
				<label for="name" class="control-label">Name:<font color="red"><sup>*</sup></font></label>
				<div class="controls">
					<input type = "text" name='name' id='name' class="required alphabet input-xlarge">
				</div>
			</div>
			<div class="">
				<label for="email" class="control-label">Email:<font color="red"><sup>*</sup></font></label>
				<div class="controls">
					<input type = "text" name='email' id='email' class="required email input-xlarge">
				</div>
			</div>
			<div class="">
				<label for="address" class="control-label">Address:<font color="red"><sup>*</sup></font></label>
				<div class="controls">
					<textarea name="address" id="address" rows="4" cols="50" class="required input-xlarge"></textarea>
				</div>
			</div>
			<div class="">
				<label for="mobile" class="control-label">Mobile:<font color="red"><sup>*</sup></font></label>
				<div class="controls">
					<div class="input-prepend input-append"><span class="add-on">+91-</span><input class="span3 required number" type='text' maxlength="10" minlength="10" name='mobile' style="width:230px;"></div>
				</div>
			</div>
		</div>
		<div class="pull-right">
		<h3>Login Information:</h3>
			<div class="control-group">
				<label for="user_name" class="control-label">User Name:<font color="red"><sup>*</sup></font><br/></label>
				<div class="controls">
					<input type = "text"  autocomplete='off' class="required input-xlarge" minlength="5" name='user_name'>
				</div>
			</div>
			<div class="control-group">
				<label for="user_pass" class="control-label">Password:<font color="red"><sup>*</sup></font><br/></label>
				<div class="controls">
					<input type="password"  name='user_pass' id='password' class="required input-xlarge" minlength="5" autocomplete='off'>
				</div>
			</div>
			<div class="control-group">
				<label for="confirm_password" class="control-label">Confirm Password:<font color="red"><sup>*</sup></font><br/></label>
				<div class="controls">
					<input type="password"  name='confirm_password' class="required input-xlarge" autocomplete='off'>
				</div>
			</div>
		</div>
		</fieldset>
	</div>
	
	<div class="loginstrbtn margin-left-30 margin-top10">
		<input type="submit" id="Usersubmit" value="Add User" class="btn btn-success pull-left">
</div>

	</div>
</div>



</form>
