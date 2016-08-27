<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo lang('edit_group_heading'); ?>
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
                            <div class="panel-heading"><?php echo lang('edit_group_subheading'); ?></div>
                            <div class="panel-body">
                                <?php
                                if ($message != NULL)
                                    echo '<div class="alert alert-danger">' . $message . '</div>';
                                ?>

                                <?php echo form_open(current_url()); ?>

                                <div class="form-group">
                                    <?php echo lang('edit_group_name_label', 'group_name'); ?> <br />
                                    <?php
                                    $group_name['class'] = 'form-control';
                                    $group_name['name'] = 'group_name';
                                    $group_name['type'] = 'text';
                                    echo form_input($group_name);
                                    ?>
                                </div>

                                <div class="form-group">
                                    <?php echo lang('edit_group_desc_label', 'description'); ?> <br />
                                    <?php
                                    $group_description['class'] = 'form-control';
                                    $group_description['name'] = 'group_description';
                                    $group_description['type'] = 'text';
                                    echo form_input($group_description);
                                    ?>
                                </div>

                            </div>
                            <div class="panel-footer">
                                <?php
                                echo form_submit(array(
                                    'name' => 'submit',
                                    'value' => lang('edit_group_submit_btn'),
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