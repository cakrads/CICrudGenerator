</head>

<body class="skin-purple">

    <!-- Site wrapper -->

    <div class="wrapper">



        <header class="main-header">

            <a href="#" class="logo"><b>Himpsi Sumut</b></a>

            <!-- Header Navbar: style can be found in header.less -->

            <nav class="navbar navbar-static-top" role="navigation">

                <!-- Sidebar toggle button-->

                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </a>

                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->

                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <img src="<?php echo base_url('images/logo.jpg') ?>" class="user-image" alt="User Image"/>

                                <span class="hidden-xs">Member</span>

                            </a>

                            <ul class="dropdown-menu">

                                <!-- User image -->

                                <li class="user-header">

                                    <img src="<?php echo base_url('images/logo.jpg') ?>" class="img-circle" alt="User Image" />

                                    <p>

                                        <?php echo $show_username; ?><br>

                                        

                                    </p>

                                </li>

                                <!-- Menu Footer-->

                                <li class="user-footer">

                                    <div class="pull-left">

                                        <a href="<?php echo site_url($folder_member.'users')?>" class="btn btn-default btn-flat">Profile</a>

                                    </div>

                                    <div class="pull-right">

                                        <a href="<?php echo site_url($folder_member.'login/do_logout') ?>" class="btn btn-default btn-flat">Sign out</a>

                                    </div>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </div>

            </nav>

        </header>



        <!-- =============================================== -->