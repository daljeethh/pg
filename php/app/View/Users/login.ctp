<div class="row">
	<div class="span4 offset5">
		<div class="login-icon offset1">
            <?php //echo $this->Html->image('icon.png'); ?>
            <b class="icon-group" style="font-size:100px;"></b>
            <h4>Welcome to <small>PG Locator</small></h4>
          </div>
          <div class="login-form">
			<legend>Sign in to PG Locator</legend>
			<form method="POST" action="" accept-charset="UTF-8" class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<div class="input-prepend input-append">
							<span class="add-on"><i class="icon-user tip" title="User Name"></i></span><input class="span3 input-xlarge" placeholder="Username" type="text" name="data[User][user_name]">
						</div>
					</div>
					<div class="control-group">
						<div class="input-prepend input-append">
							<span class="add-on"><i class="icon-lock tip" title="Password"></i></span><input class="span3 input-xlarge" placeholder="Password" autocomplete='off' type="password" name="data[User][user_pass]">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button tabindex="3" class="btn btn-primary btn-mid"><i class="icon-lock icon-white"></i> Log in</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

