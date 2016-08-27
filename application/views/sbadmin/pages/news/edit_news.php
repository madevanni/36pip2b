<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Update news
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
                if (isset($message)) {
                    if ($message != NULL)
                        echo '<div class="alert alert-danger">' . $message . '</div>';
                }
                ?>

                <?php echo form_open(uri_string()); ?>

                <div class="form-group">
                    <?php echo form_label('News title', 'news_title'); ?>
                    <?php
                    $newsTitle['class'] = 'form-control';
                    $newsTitle['name'] = 'news_title';
                    $newsTitle['type'] = 'text';
                    $newsTitle['value'] = $news->news_title;
                    echo form_input($newsTitle);
                    ?>
                </div>

                <div class="form-group">
                    <?php echo form_label('News content', 'news_content'); ?>
                    <?php
                    $newsContent['class'] = 'form-control';
                    $newsContent['name'] = 'news_content';
                    $newsContent['type'] = 'textarea';
                    $newsContent['value'] = $news->news_content;
                    echo form_textarea($newsContent);
                    ?>
                </div>

                <div class="form-group">
                    <?php
                    echo form_submit(array(
                        'name' => 'submit',
                        'value' => 'Update news',
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