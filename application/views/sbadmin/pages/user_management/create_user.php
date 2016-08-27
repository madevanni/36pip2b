<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo lang('create_user_heading'); ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo lang('create_user_subheading'); ?></div>
                    <div class="panel-body">
                        <?php
                        if ($message != NULL)
                            echo '<div class="alert alert-danger">' . $message . '</div>';
                        ?>

                        <?php echo form_open("administrator/create_user"); ?>

                        <div class="form-group">
                            <?php echo form_label('Username:', 'username'); ?> <br />
                            <?php
                            $username['class'] = 'form-control';
                            $username['name'] = 'username';
                            $username['type'] = 'text';
                            echo form_input($username);
                            ?>
                        </div>
                        
                        <div class="form-group">
                            <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                            <?php
                            $first_name['class'] = 'form-control';
                            $first_name['name'] = 'first_name';
                            $first_name['type'] = 'text';
                            echo form_input($first_name);
                            ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                            <?php
                            $last_name['class'] = 'form-control';
                            $last_name['name'] = 'last_name';
                            $last_name['type'] = 'text';
                            echo form_input($last_name);
                            ?>
                        </div>

                        <?php
                        if ($identity_column !== 'email') {
                            echo lang('create_user_identity_label', 'identity');
                            echo '<br />';
                            echo form_error('identity');
                            $identity['class'] = 'form-control';
                            $identity['name'] = 'identity';
                            $identity['type'] = 'text';
                            echo form_input($identity);
                        }
                        ?>

                        <div class="form-group">
                            <?php echo lang('create_user_company_label', 'company'); ?> <br />
                            <?php
                            $company['class'] = 'form-control';
                            $company['name'] = 'company';
                            $company['type'] = 'text';
                            echo form_input($company);
                            ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_email_label', 'email'); ?> <br />
                            <?php
                            $email['class'] = 'form-control';
                            $email['name'] = 'email';
                            $email['type'] = 'text';
                            echo form_input($email);
                            ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                            <?php
                            $phone['class'] = 'form-control';
                            $phone['name'] = 'phone';
                            $phone['type'] = 'text';
                            echo form_input($phone);
                            ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_password_label', 'password'); ?> <br />
                            <?php
                            $password['class'] = 'form-control';
                            $password['name'] = 'password';
                            $password['type'] = 'text';
                            echo form_input($password);
                            ?>
                        </div>

                        <div class="form-group">
                            <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                            <?php
                            $password_confirm['class'] = 'form-control';
                            $password_confirm['name'] = 'password_confirm';
                            $password_confirm['type'] = 'text';
                            echo form_input($password_confirm);
                            ?>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <?php
                        echo form_submit(array(
                            'name' => 'submit',
                            'value' => lang('create_user_submit_btn'),
                            'class' => 'btn btn-primary'
                        ));
                        ?>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>