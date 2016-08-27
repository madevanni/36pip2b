<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo lang('deactivate_heading'); ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo sprintf(lang('deactivate_subheading'), $user->username); ?>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <?php echo form_open("administrator/deactivate/" . $user->id); ?>

                        <p>
                        <div class="form-group">
                            <div class="radio">
                                <label><input type="radio" name="confirm" value="yes" checked="checked" /></label>
                                <?php echo lang('deactivate_confirm_y_label'); ?>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="confirm" value="no" /></label>
                                <?php echo lang('deactivate_confirm_n_label'); ?>
                            </div>
                        </div>
                        </p>

                        <?php echo form_hidden($csrf); ?>
                        <?php echo form_hidden(array('id' => $user->id)); ?>
                        
                    </div>
                    <div class="panel-footer">
                        <?php
                        echo form_submit(array(
                            'name' => 'submit',
                            'value' => lang('deactivate_submit_btn'),
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