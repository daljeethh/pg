 <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <div class="">
            <ul class="nav">
              <li class="">
                <a href="<?php echo $this->Html->baseURL . '/pages'?>" target="_blank"><strong>PG Locator</strong></a>
              </li>
              <li class="">
                <a class="font-24" href="./index.html"><i class="icon-home"></i></a>
              </li>
              <li class="active">
                <a href="./getting-started.html">Get started</a>
              </li>
              <li class="">
                <a href="./scaffolding.html">Scaffolding</a>
              </li>
              <li class="">
                <a href="./base-css.html">Base CSS</a>
              </li>
              </ul>
              <ul class="nav pull-right">
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <font color = "white" >
                        <i class="icon-user"></i> Welcome 
                          <?php if( $this->Session->read("User") ) { 
                            echo ucfirst( $this->Session->read("User.name") ); 
                          } 
                          else { echo "Guest"; 
                        }?> !</font> &nbsp;<i class="icon-caret-down"></i>
                      </a>
                    <ul class="dropdown-menu">
                        <?php if( $this->Session->read("User") ) { ?>
                         <li><a href="<?php echo $this->Html->url(array( 'controller' => 'users', 'action' => 'view', $this->Session->read('User.id') ) );?>">My Account</a></li>
                        <li><a href="<?php echo $this->Html->url(array( 'controller' => 'users', 'action' => 'logout') );?>">Logout</a></li>
                        <?php  } else { ?>
                        <li><a href="<?php echo $this->Html->url(array( 'controller' => 'users', 'action' => 'signup' ) );?>">Register</a></li>
                        <li><a href="<?php echo $this->Html->url(array( 'controller' => 'users', 'action' => 'login') );?>">Login</a></li>
                        <?php } ?>
                        <?php if( $this->Session->read("User.role_id") == '1' ) { ?>
                            <li><a href="<?php echo $this->Html->url(array( 'controller' => 'users', 'action' => 'all' ) );?>">View Users</a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </div>