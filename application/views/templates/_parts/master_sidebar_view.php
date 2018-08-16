<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" width="48" height="48" src="<?=base_url().$data_user->avatar;?>"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold"><?=$data_user->name;?></span>
                        <span class="text-muted text-xs block"><?=$data_user->rol;?> <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>workspace/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>auth/loginout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <?php
            forEach($data_user->routes as $routes):
            $idPather = $routes->id_menu;
                if ($routes->MenParentId == 0): ?>

                    <li class="<?php echo ($module[0] == $routes->MenNavegacion) ? 'active' : '' ?>">
                        <a href="<?=base_url().$routes->MenPagina;?>"><i class="<?= $routes->MenIcono;?>"></i>
                            <span class="nav-label"><?= $routes->MenNavegacion;?></span>
                            <?php if($routes->MenIcono_flecha == 'true'): ?>
                            <span class="fa arrow"></span>
                            <?php endif; ?>
                        </a>
                        <?php if($routes->MenIcono_flecha == 'true'): ?>
                        <ul class="nav nav-second-level">
                            <?php forEach ($data_user->routes as $routes):
                                if ($idPather == $routes->MenParentId):
                                    if($module[1] == $routes->MenNavegacion){
                                        echo '<li class="active">';
                                    }else{
                                        echo '<li>';
                                    } ?>
                                        <a href="<?=base_url().$routes->MenPagina;?>"><?= $routes->MenNavegacion ?></a></li>
                                <?php endif; endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </li>

            <?php
            endif;
            endforeach; ?>
            <li class="landing_link">
                <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning float-right">NEW</span></a>
            </li>
            <li class="special_link">
                <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
            </li>
        </ul>
    </div>
</nav>
