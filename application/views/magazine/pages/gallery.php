<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
    <div class="row">
        <div class="middle_bar">

            <!-- Breadcrumb here's -->

            <div class="single_category">
                <div class="category_title"> <a href="#">Gallery</a></div>
                <div class="single_category_inner">
                    <?php
                    if (isset($images)) {
                        if ($images->num_rows() > 0) {
                            ?>
                            <?php foreach ($images->result() as $img) : ?>
                                <ul class="catg_nav catg_nav3 col-lg-4">
                                    <li>
                                        <div class="catgimg_container">
                                            <a id="fancybox" class="catg1_img" href="<?php echo base_url() . $img->img_path ?>" title="<?= $img->img_caption ?>"> <?= img($img->img_path) ?></a>
                                        </div>
                                        <a class="catg_title" href="#"><b><?= $img->img_caption ?></b></a>
                                        <div class="sing_commentbox">
                                            <p><i class="fa fa-calendar"></i><?= $img->img_timestamp ?> by <?= $this->ion_auth->get_username($img->img_user_id); ?></p>
                                        </div>
                                        <p class="post-summary"><?= $img->img_desc ?></p>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading" align="center">We don't have any image yet.</div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>