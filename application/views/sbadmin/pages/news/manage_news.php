<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">News management</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <?php
                    if (isset($message)) {
                        if ($message != NULL)
                            echo '<div class="alert alert-success">' . $message . '</div>';
                    }
                    ?>
                    <?php
                    if (isset($news)) {
                        if ($news->num_rows() > 0) {
                            $i = 0;
                            foreach ($news->result() as $newsItem) :
                                $i++
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <div class="pull-right">
                                                <a href="<?= base_url() . 'news/delete/' . $newsItem->Id ?>" class="btn btn-outline btn-danger btn-xs" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                            <div class="pull-right" style="margin-right:5px;">
                                                <a href="<?= base_url() . 'news/edit/' . $newsItem->Id ?>" class="btn btn-outline btn-warning btn-xs"><i class="fa fa-pencil"></i>
                                                </a>
                                            </div>
                                            <b><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i ?>">
                                                    <?= $newsItem->news_title ?></a></b><br>
                                            <small>Posted by <?= $newsItem->news_user_id ?> at <?= $newsItem->news_timestamp ?></small>
                                        </h4>
                                    </div>
                                    <div id="collapse<?= $i ?>" class="panel-collapse collapse">
                                        <div class="panel-body"><?= $newsItem->news_content ?></div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->
</div>