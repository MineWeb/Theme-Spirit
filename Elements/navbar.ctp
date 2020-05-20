<!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false " aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center" style="margin-left:auto;margin-right:auto;text-transform:uppercase;">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Accueil</a>
                                </li>
                                <?php
								if(!empty($nav)) {
								
								  $i = 0;
								  foreach ($nav as $key => $value) {
								
								    if(empty($value['Navbar']['submenu'])) {
								
								      echo '<li';
									  echo ' class="nav-item';
								      echo ($this->params['controller'] == $value['Navbar']['name']) ? 'active"' : '"';
								      echo '>';
								        echo '<a class="nav-link" href="'.$value['Navbar']['url'].'"';
								        echo ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '';
								        echo '>';
								          echo $value['Navbar']['name'];
								        echo '</a>';
								      echo '</li>';
								
								    } else {
								
								      echo '<li>';
								        echo '<a href="#">'.$value['Navbar']['name'];
								        echo '</a>';
								
								        echo '<ul class="dropdown">';
								          $submenu = json_decode($value['Navbar']['submenu']);
								          foreach ($submenu as $k => $v) {
								
								            echo '<li>';
								              echo '<a href="'.rawurldecode(rawurldecode($v)).'"';
								              echo ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '';
								              echo '>';
								                echo rawurldecode(str_replace('+', ' ', $k));
								              echo '</a>';
								            echo '</li>';
								
								          }
								        echo '</ul>';
								      echo '</li>';
								
								    }
								    $i++;
									if($i == 2){
										echo '<a class="navbar-brand" href="/" style="width:125px">';
										if(isset($theme_config['logo']) && $theme_config['logo']) {
											echo '<img src="'. $theme_config['logo'] .'">';
										  }
										echo '</a>';
									}
								  }
								}
								echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon compte</a>';
								echo '<div class="dropdown-menu" aria-labelledby="accountDropdown">';
								if(isset($isConnected) && $isConnected) {
								echo '<a class="dropdown-item" href="'.$this->Html->url(array('controller' => 'user', 'action' => 'profile', 'plugin' => false)).'">Profil</a>';
								  if($Permissions->can('ACCESS_DASHBOARD')) {
								    echo '<a class="dropdown-item" style="color:#f3625f;" href="'.$this->Html->url(array('controller' => 'admin', 'action' => 'index', 'admin' => true, 'plugin' => false)).'">Panel Admin</a>';
								  }
								  echo '<a class="dropdown-item" href="'.$this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => false)).'">'.$Lang->get('USER__LOGOUT').'</a>';
								
								} else {
								  echo '<a class="dropdown-item" href="#" data-toggle="modal" data-target="#login">'.$Lang->get('USER__LOGIN').'</a>';
								  echo '<a class="dropdown-item" href="#" data-toggle="modal" data-target="#register">'.$Lang->get('USER__REGISTER').'</a>';
								}
								echo '</div></li>';
								?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
		</div>
	</header>
    <!-- Header part end-->