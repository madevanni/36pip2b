<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Manage Images</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($message != NULL)
                    echo '<div class="alert alert-success">' . $message . '</div>';
                ?>
                <div class="row">
                    <?php
                    if (isset($images)) {
                        if ($images->num_rows() > 0) {
                            ?>
                            <?php foreach ($images->result() as $img) : ?>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <div class="thumbnail">
                                        <a href="<?php echo base_url().$img->img_path ?>">
                                            <?= img($img->img_path) ?>
                                        </a>
                                        <div class="caption">
                                            <h3><?= $img->img_caption ?></h3>
                                            <p><?= substr($img->img_desc, 0, 100) ?>...</p>
                                            <p>
                                                <?= anchor('gallery/edit/' . $img->id, 'Edit', ['class' => 'btn btn-warning', 'role' => 'button']) ?>
                                                <?= anchor('gallery/delete/' . $img->id, 'Delete', ['class' => 'btn btn-danger', 'role' => 'button', 'onclick' => 'return confirm(\'Are you sure?\')']) ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php } ?>
                    <?php } else { ?>
                        // FIXME can't display status when don't have image
                        <div align="center">We don't have any image yet, go ahead and <?= anchor('gallery/upload', 'add a new one') ?>.</div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>