<!DOCTYPE html>
<html>
    <head>
        <title><?php ((isset($title)) ? print $title : "PIP2B Propinsi Banten"); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="fav_icon.ico" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/css/li-scroller.css">
        <link rel="stylesheet" type="text/css" href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/css/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/css/theme.css">
        <link rel="stylesheet" type="text/css" href="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/css/style.css">
        <?php
        if (isset($Styles)) {
            foreach ($Styles as $Style) {
                ((isset($Style)) ? print $Style : "");
            }
        } else {
            ((isset($Styles)) ? print $Styles : "");
        }
        ?>
        <!--[if lt IE 9]>
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/js/html5shiv.min.js"></script>
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <!-- Scroll to Top -->
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

        <!-- Content -->
        <div class="container">
            <div class="box_wrapper">

                <!-- Header -->
                <header id="header">

                    <!-- Header Top-->
                    <?php $this->load->view('magazine/common/navigation'); ?>

                    <!-- Header bottom -->
                    <div class="header_bottom">
                        <div class="logo_area"><a href="../index.php"><img src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/images/pip2b.png"></a></div>
                        <!--<div class="logo_area"><a class="logo" href="index.php">PIP<b>2</b>B-Banten.NeT <p><small>Pusat Informasi Pengembangan Permukiman dan Bangunan</small></p></a></div>-->
                        <div class="top_addarea"><a href="../index.php"><img src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/images/addbanner_728x90_V1.jpg"></a></div>
                    </div>
                </header>

                <!-- Latest news -->
                <?php $this->load->view('magazine/common/headline'); ?>

                <!-- Content -->
                <section id="contentbody">
                    <div class="row">

                        <!-- Mid content -->
                        <?php
                        if (isset($pages)) {
                            $this->load->view('magazine/pages/' . $pages);
                        } else {
                            $this->load->view('magazine/pages/home');
                        }
                        ?>

                        <!-- Right content -->
                        <?php $this->load->view('magazine/common/sidebar') ?>

                    </div>
                </section>

                <!-- Footer -->
                <?php $this->load->view('magazine/common/footer'); ?>

            </div>
        </div>
        <!-- End of Content -->

        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/js/jquery.min.js"></script>
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/js/wow.min.js"></script>
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/js/bootstrap.min.js"></script>
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/js/slick.min.js"></script>
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/js/jquery.li-scroller.1.0.js"></script>
        <script src="<?php ((isset($Relative)) ? print $Relative : ""); ?>assets/magazine/js/custom.js"></script>
        <!-- Start Open Web Analytics Tracker -->
        <script type="text/javascript">
            //<![CDATA[
            var owa_baseUrl = 'http://localhost/owa/';
            var owa_cmds = owa_cmds || [];
            owa_cmds.push(['setSiteId', '57c9da1c226fad8bc04c6cf4f5e4f39c']);
            owa_cmds.push(['trackPageView']);
            owa_cmds.push(['trackClicks']);
            owa_cmds.push(['trackDomStream']);

            (function () {
                var _owa = document.createElement('script');
                _owa.type = 'text/javascript';
                _owa.async = true;
                owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl);
                _owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
                var _owa_s = document.getElementsByTagName('script')[0];
                _owa_s.parentNode.insertBefore(_owa, _owa_s);
            }());
            //]]>
        </script>
        <!-- End Open Web Analytics Code -->
        <?php
        if (isset($Scripts)) {
            foreach ($Scripts as $Script) {
                ((isset($Script)) ? print $Script : "");
            }
        } else {
            ((isset($Scripts)) ? print $Scripts : "");
        }
        ?>
    </body>
</html>