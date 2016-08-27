<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo lang('edit_user_heading'); ?>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><?php echo lang('edit_user_subheading'); ?></div>
                            <div class="panel-body">
                                <?php
                                if ($message != NULL)
                                    echo '<div class="alert alert-danger">' . $message . '</div>';
                                ?>

                                <?php echo form_open(uri_string()); ?>

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
                                    <?php echo lang('edit_user_fname_label', 'first_name'); ?> <br />
                                    <?php
                                    $first_name['class'] = 'form-control';
                                    $first_name['name'] = 'first_name';
                                    $first_name['type'] = 'text';
                                    echo form_input($first_name);
                                    ?>
                                </div>

                                <div class="form-group">
                                    <?php echo lang('edit_user_lname_label', 'last_name'); ?> <br />
                                    <?php
                                    $last_name['class'] = 'form-control';
                                    $last_name['name'] = 'last_name';
                                    $last_name['type'] = 'text';
                                    echo form_input($last_name);
                                    ?>
                                </div>

                                <div class="form-group">
                                    <?php echo lang('edit_user_company_label', 'company'); ?> <br />
                                    <?php
                                    $company['class'] = 'form-control';
                                    $company['name'] = 'company';
                                    $company['type'] = 'text';
                                    echo form_input($company);
                                    ?>
                                </div>

                                <div class="form-group">
                                    <?php echo lang('edit_user_phone_label', 'phone'); ?> <br />
                                    <?php
                                    $phone['class'] = 'form-control';
                                    $phone['name'] = 'phone';
                                    $phone['type'] = 'text';
                                    echo form_input($phone);
                                    ?>
                                </div>

                                <div class="form-group">
                                    <?php echo lang('edit_user_password_label', 'password'); ?> <br />
                                    <?php
                                    $password['class'] = 'form-control';
                                    $password['name'] = 'password';
                                    $password['type'] = 'text';
                                    echo form_input($password);
                                    ?>
                                </div>

                                <div class="form-group">
                                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?><br />
                                    <?php
                                    $password_confirm['class'] = 'form-control';
                                    $password_confirm['name'] = 'password_confirm';
                                    $password_confirm['type'] = 'text';
                                    echo form_input($password_confirm);
                                    ?>
                                </div>

                                <?php if ($this->ion_auth->is_admin()): ?>

                                    <div class="form-group">
                                        <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                                        <?php foreach ($groups as $group): ?>
                                            <label class="checkbox">
                                                <?php
                                                $gID = $group['id'];
                                                $checked = null;
                                                $item = null;
                                                foreach ($currentGroups as $grp) {
                                                    if ($gID == $grp->id) {
                                                        $checked = ' checked="checked"';
                                                        break;
                                                    }
                                                }
                                                ?>
                                                <div>
                                                    <label>
                                                        <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                                                        <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                                    </label>
                                                </div>
                                            </label>
                                        <?php endforeach ?>
                                    </div>

                                <?php endif ?>

                                <?php echo form_hidden('id', $user->id); ?>
                                <?php echo form_hidden($csrf); ?>
                            </div>
                            <div class="panel-footer">
                                <?php
                                echo form_submit(array(
                                    'name' => 'submit',
                                    'value' => lang('edit_user_submit_btn'),
                                    'class' => 'btn btn-primary'
                                ));
                                ?>
                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>