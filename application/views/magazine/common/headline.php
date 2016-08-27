<div class="latest_newsarea"> <span>Berita Terkini</span>
    <ul id="ticker01" class="newssticker">
        <?php
        $headline = $this->News_model->get_headline();
        if (isset($headline)) {
            if ($headline->num_rows() > 0) {
                foreach ($headline->result() as $headlineItem) :
                    ?>
                    <li><a href="<?= base_url() . 'news/view/' . $headlineItem->Id ?>"><?= $headlineItem->news_title ?></a></li>
                    <?php
                endforeach;
            }
        }
        ?>
    </ul>
</div>