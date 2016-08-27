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
                                <ul class="catg_nav catg_nav3 col-lg-4">
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

        </div>
    </div>
</div>