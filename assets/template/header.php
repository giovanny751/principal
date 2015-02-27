<body class="page-header-fixed page-quick-sidebar-over-content">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <img src="<?php echo base_url("/images/vice/logo_vice_04.png") ?>" alt="logo" class="logo-default"/>
                </a>
                <div class="menu-toggler sidebar-toggler hide">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!--                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="icon-calendar"></i>
                                                <span class="badge badge-default">
                                                    15
                                                </span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <p>
                                                        Proximas Cuentas por Pagar: 15
                                                    </p>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                    <?php //for ($a = 0; $a < 15; $a++) { ?>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="label label-sm label-icon label-info">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </span>
                                                                    Jan David Parra. 
                                                                    <span class="time">
                                                                        En 15 dias
                                                                    </span>
                                                                </a>
                                                            </li>
                    <?php //} ?>
                                                    </ul>
                                                </li>
                                                <li class="external">
                                                    <a href="#">
                                                        Ver Todas
                                                        <i class="m-icon-swapright"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>-->
                    <!-- END NOTIFICATION DROPDOWN -->


                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<!--                            <img alt="" class="img-circle" src="<?php echo base_url('images/vice/user-29_2.jpg') ?>"/>-->
                            <i class="fa fa-user" style="font-size: 21px !important;color: rgb(102, 102, 195) !important;"></i>
                            <span class="username">
                                <?php echo $this->session->userdata('USUARIO_NOMBRES') . ' ' . $this->session->userdata('USUARIO_APELLIDOS'); ?> 
                            </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url('index.php/login/logout') ?>">
                                    <i class="icon-key"></i> 
                                    Salir 
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->

                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <div class="page-container">
        <div class="modal fade" id="opcion" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true" aria-labelledby="exampleModalLabel" aria-hidden="true" aria-modal="true">
            <div id="remover" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <div id="contenido"></div>
                    </div>
                    <div class="modal-footer">
                        <button id="cerrar" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <!--<button type="button" class="btn btn-primary">Send message</button>-->
                    </div>
                </div>
            </div>
        </div>