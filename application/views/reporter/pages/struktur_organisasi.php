<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php ((isset($title)) ? print $title : "PIP2B Propinsi Banten"); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/font/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/font/font.css" />
        <link rel="stylesheet" type="text/css" href="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/css/responsive.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/css/jquery.bxslider.css" media="screen" />
    </head>
    <body>
        <div class="body_wrapper">
            <div class="center">

                <!-- Header -->
                <div class="header_area" style="margin-bottom: 20px">
                    <div class="logo floatleft"><a href="#"><img src="assets/reporter/images/pip2b.png" alt="" /></a></div>
                </div>

                <!-- Navigation -->
                <?php $this->load->view('reporter/common/navigation'); ?>

                <!-- Content Area -->
                <div class="content_area">

                    <!-- Sidebar Left -->
                    <div class="main_content floatleft">

                    </div>

                    <!-- Sidebar Right -->
                    <div class="sidebar floatright">
                        <div class="single_sidebar">
                            <div class="popular">
                                <h2 class="title">Popular</h2>
                                <ul>
                                    <li>
                                        <div class="single_popular">
                                            <p>Sept 24th 2045</p>
                                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_popular">
                                            <p>Sept 24th 2045</p>
                                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_popular">
                                            <p>Sept 24th 2045</p>
                                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_popular">
                                            <p>Sept 24th 2045</p>
                                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_popular">
                                            <p>Sept 24th 2045</p>
                                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                        </div>
                                    </li>
                                </ul>
                                <a class="popular_more">more</a> </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Area -->
                <?php $this->load->view('reporter/common/footer'); ?>

            </div>
        </div>
        <script type="text/javascript" src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/js/jquery-min.js"></script> 
        <script type="text/javascript" src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/js/jquery.bxslider.js"></script> 
        <script type="text/javascript" src="<?php ((isset($cssRelative)) ? print $cssRelative : ""); ?>assets/reporter/js/selectnav.min.js"></script> 
        <script type="text/javascript">
            selectnav('nav', {
                label: '-Navigation-',
                nested: true,
                indent: '-'
            });
            selectnav('f_menu', {
                label: '-Navigation-',
                nested: true,
                indent: '-'
            });
            $('.bxslider').bxSlider({
                mode: 'fade',
                captions: true
            });
        </script>
    </body>
</html>