<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php ((isset($title)) ? print $title : lang('login_heading')); ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/sbadmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/sbadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/sbadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo lang('login_heading'); ?></h3>
                        </div>
                        <?php
                        if ($message != NULL)
                            echo '<div class="alert alert-danger">' . $message . '</div>';
                        ?>
                        <div class="panel-body">
                            <?php echo form_open("administrator/login", 'role="form"'); ?>
                            <div class="form-group">
                                <?php
                                $identity['class'] = 'form-control';
                                $identity['placeholder'] = 'E-mail';
                                $identity['name'] = 'identity';
                                $identity['type'] = 'identity';
                                $identity['autofocus'] = 'autofocus';
                                echo form_input($identity);
                                ?>
                            </div>
                            <div class="form-group">
                                <?php
                                $password['class'] = 'form-control';
                                $password['placeholder'] = 'Password';
                                $password['name'] = 'password';
                                $password['type'] = 'password';
                                echo form_input($password);
                                ?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <?php
                                    $remember['name'] = 'remember';
                                    $remember['value'] = 'Remember me';
                                    echo form_checkbox('remember', '1', FALSE, $remember);
                                    ?>
                                    Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <?php
                                echo anchor('administrator/forgot_password', lang('login_forgot_password'));
                                ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-lg btn-success btn-block"'); ?>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <?php echo form_close(); ?>
                            <center><a href="<?php echo base_url(); ?>" class="glyphicon glyphicon-home"></a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/sbadmin/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/sbadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/sbadmin/dist/js/sb-admin-2.js"></script>

    </body>

</html>