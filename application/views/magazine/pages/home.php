<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
    <div class="row">
        <div class="middle_bar">
            
            <!-- Breadcrumb here's -->
            
            <div class="single_category">
                <div class="category_title"> <a href="#">Kabar Berita</a></div>
                <div class="single_category_inner">
                    <?php
                    if (isset($news)) {
                        if ($news->num_rows() > 0) {
                            ?>
                            <?php foreach ($news->result() as $newsItem) : ?>
                                <ul class="catg_nav catg_nav3 col-lg-3">
                                    <li class="panel panel-default">
                                        <b><a class="catg_title panel-heading" href="<?php echo base_url() . 'news/view/' . $newsItem->Id ?>"> <?= substr($newsItem->news_title, 0, 20) ?> ...</a></b>
                                        <div class="panel-body">
                                            <p><i class="fa fa-calendar"></i> <?= $newsItem->news_timestamp ?></p>
                                            <a href="#"><i class="glyphicon glyphicon-user"></i> <?= $this->ion_auth->get_username($newsItem->news_user_id); ?></a>
                                            <p class="post-summary" align='justify'>Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                                        </div>
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
            
            <div class="single_category">
                <div class="category_title"> <a href="#">Gallery</a></div>
                <div class="single_category_inner">
                    <?php
                    if (isset($images)) {
                        if ($images->num_rows() > 0) {
                            ?>
                            <?php foreach ($images->result() as $img) : ?>
                                <ul class="catg_nav catg_nav3 col-lg-3">
                                    <li>
                                        <div class="catgimg_container">
                                            <a id="fancybox" class="catg1_img" href="<?php echo base_url() . $img->img_path ?>" title="<?= $img->img_caption ?>"> <?= img($img->img_path) ?></a>
                                        </div>
                                        <a class="catg_title" href="#"> <b><?= $img->img_caption ?></b></a>
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
            <!--<div class="single_category wow fadeInDown">
                <div class="category_title"> <a href="pages/category-archive.html">Category 1</a></div>
                <div class="single_category_inner">
                    <ul class="catg_nav">
                        <li>
                            <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/magazine/images/310x150.jpg" alt=""> </a></div>
                            <a class="catg_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a>
                            <div class="sing_commentbox">
                                <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </li>
                        <li>
                            <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/magazine/images/310x150.jpg" alt=""> </a></div>
                            <a class="catg_title" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a>
                            <div class="sing_commentbox">
                                <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </li>
                        <li>
                            <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/magazine/images/310x150.jpg" alt=""> </a></div>
                            <a class="catg_title" href="pages/single_page.html"> Curabitur ac dictum nisl eu hendrerit ante</a>
                            <div class="sing_commentbox">
                                <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                <a href="pages/single_page.html"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </li>
                        <li>
                            <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/magazine/images/310x150.jpg" alt=""> </a></div>
                            <a class="catg_title" href="#">Fusce eu nulla semper porttitor felis sit amet</a>
                            <div class="sing_commentbox">
                                <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="single_category  wow fadeInDown">
                <div class="category_title"> <a href="pages/category-archive.html">Category 2</a></div>
                <div class="single_category_inner">
                    <ul class="catg_nav catg_nav2">
                        <li>
                            <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/magazine/images/310x300.jpg" alt=""> </a></div>
                            <a class="catg_title" href="#"> Curabitur ac dictum nisl eu hendrerit ante</a>
                            <div class="sing_commentbox">
                                <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                            <p class="post-summary">Suspendisse mauris dui, interdum vitae vehicula ut, posuere sed lectus. Nulla facilisi. Curabitur...</p>
                        </li>
                        <li>
                            <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/magazine/images/310x300.jpg" alt=""> </a></div>
                            <a class="catg_title" href="#">Fusce eu nulla semper porttitor felis sit amet</a>
                            <div class="sing_commentbox">
                                <p><i class="fa fa-calendar"></i>19 Nov 2045</p>
                                <a href="#"><i class="fa fa-comments"></i>20 Comments</a></div>
                            <p class="post-summary">Suspendisse mauris dui, interdum vitae vehicula ut, posuere sed lectus. Nulla facilisi. Curabitur...</p>
                        </li>
                    </ul>
                </div>
            </div>-->
        </div>
    </div>
</div>