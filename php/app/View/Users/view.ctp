  <div class="well well-small">
       <h2>Details for <?php echo ucfirst( $user['User']['name'] ); ?><?php //<a class="btn btn-info pull-right" href="<?php echo $this->Html->url(array( 'controller' => 'users', 'action' => 'edit', $user['User']['id'] ) );  "> Edit</a>?></h2>
    </div>
    <table name="personal" class="table table-bordered">
        <tr>
             <ul class="breadcrumb">
                <li class="active"><h4>Personal Information:</h4></li>
            </ul>
        </tr>
        <tr>
            <td width="22%"><strong>Name</strong></td>
            <td width="36%"><?php echo ucfirst( $user['User']['name'] ); ?></td>
            <td width="22%"><strong>Role</strong></td>
            <td width="36%"><?php echo $user['User']['role_id']; ?></td>
        </tr>
        <tr>
            <td valign="top"><strong>Address</strong></td>
            <td><?php echo str_replace('\n',' ' , $user['User']['address'] ); ?></td>
            <td valign="top"><strong>Email Address</strong></td>
            <td><?php echo $user['User']['email']; ?></td>
        </tr>
        <tr>
            <td class="aright"><strong>Mobile Number</strong></td>
            <td>+91-<?php echo $user['User']['mobile'];?></td>
            <td class="aright"><strong>Status</strong></td>
            <td width="36%"><?php echo $user['User']['status']; ?></td>
        </tr>
        <tr>
            <td width="22%"><strong>User Name</strong></td>
            <td width="36%"><?php echo $user['User']['user_name']; ?></td>
            <td><strong>Active</strong></td>
            <td><?php echo $user['User']['is_active'] ? 'Yes': 'No'; ?></td>
        </tr>
    </table>
    <div>
        <?php if( $user['User']['id'] == $this->Session->read( 'User.id' ) ) { ?>
            <p class="text-info"><font color ='#3A87AD' ><b><center>Last Login on : <?php echo date( 'M d, Y', strtotime( $this->Session->read( 'User.last_login' ) ) ) . "  " . date( 'H:i:s', strtotime($this->Session->read( 'User.last_login' ))); ?> </b></center></font></p>
        <?php } else {  ?>
            <p class="text-info"><font color ='#3A87AD' ><b><center>Last Login on : <?php echo date( 'M d, Y', strtotime( $user['User']['last_login'] ) ) . "  " . date( 'H:i:s', strtotime( $user['User']['last_login'])); ?> </b></center></font></p>
        <?php } ?>
    </div>
