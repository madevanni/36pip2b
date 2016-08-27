<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>">PIP2B Propinsi Banten</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Welcome <b><?= $this->ion_auth->get_username($this->session->user_id); ?></b> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo base_url() . 'administrator/profile'; ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo base_url() . 'administrator/logout'; ?>"><i class="fa fa-sign-out fa-fw"></i> Sign out</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?php echo base_url() . 'administrator'; ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li><li>
                    <a href="#"><i class="fa fa-archive fa-fw"></i> News<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php
                            echo anchor('news/manage_news', 'Manage news');
                            echo anchor('news/publish', 'Publish');
                            ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-image fa-fw"></i> Gallery<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php
                            echo anchor('gallery/manage_images', 'Manage images');
                            echo anchor('gallery/upload', 'Upload');
                            ?>
                        </li>
                    </ul>
                </li>
                <!--                
                                <li>
                                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#">Second Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Second Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level <span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                            </ul>
                                             /.nav-third-level 
                                        </li>
                                    </ul>
                                     /.nav-second-level 
                                </li>
                -->
                <li>
                    <a href="#"><i class="glyphicon glyphicon-wrench"></i> Settings<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <?php echo anchor('administrator/user_management', 'User Management') ?>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>