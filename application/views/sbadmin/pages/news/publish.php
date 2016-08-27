<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Publish a news
                    <br>
                    <small>Please enter the news description</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($message != NULL)
                    echo '<div class="alert alert-danger">' . $message . '</div>';
                ?>

                <?php echo form_open("news/publish"); ?>

                <div class="form-group">
                    <?php echo form_label('News title', 'title'); ?>
                    <?php
                    $newsTitle['class'] = 'form-control';
                    $newsTitle['name'] = 'news_title';
                    $newsTitle['type'] = 'text';
                    echo form_input($newsTitle);
                    ?>
                </div>

                <div class="form-group">
                    <?php echo form_label('Content', 'content'); ?>
                    <?php
                    $newsContent['class'] = 'form-control';
                    $newsContent['name'] = 'news_content';
                    $newsContent['type'] = 'textarea';
                    echo form_textarea($newsContent);
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    echo form_submit(array(
                        'name' => 'submit',
                        'value' => 'Create news',
                        'class' => 'btn btn-primary'
                    ));
                    ?>
                    <?= anchor('news/manage_news', 'Cancel', ['class' => 'btn btn-warning']) ?>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>