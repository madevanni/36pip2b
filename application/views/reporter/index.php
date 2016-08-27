<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>The News Reporter</title>
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
                    <div class="logo floatleft"><a href="#"><img src="assets/reporter/images/logo.png" alt="" /></a></div>
                </div>

                <!-- Navigation -->
                <?php $this->load->view('reporter/common/navigation'); ?>

                <!-- Slider -->
                <div class="slider_area">
                    <div class="slider">
                        <ul class="bxslider">
                            <li><img src="assets/reporter/images/1.jpg" alt="" title="Slider caption text" /></li>
                            <li><img src="assets/reporter/images/2.jpg" alt="" title="Slider caption text" /></li>
                            <li><img src="assets/reporter/images/3.jpg" alt="" title="Slider caption text" /></li>
                        </ul>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="content_area">

                    <!-- Sidebar Left -->
                    <div class="main_content floatleft">
                        <div class="left_coloum floatleft">
                            <div class="single_left_coloum_wrapper">
                                <h2 class="title">from   around   the   world</h2>
                                <a class="more" href="#">more</a>
                                <div class="single_left_coloum floatleft"> <img src="assets/reporter/images/single_featured.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                                        dolor eu mattis.</p>
                                    <a class="readmore" href="#">read more</a> </div>
                                <div class="single_left_coloum floatleft"> <img src="assets/reporter/images/single_featured.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                                        dolor eu mattis.</p>
                                    <a class="readmore" href="#">read more</a> </div>
                                <div class="single_left_coloum floatleft"> <img src="assets/reporter/images/single_featured.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                                        dolor eu mattis.</p>
                                    <a class="readmore" href="#">read more</a> </div>
                            </div>
                            <div class="single_left_coloum_wrapper">
                                <h2 class="title">latest  articles</h2>
                                <a class="more" href="#">more</a>
                                <div class="single_left_coloum floatleft"> <img src="assets/reporter/images/single_featured.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                                        dolor eu mattis.</p>
                                    <a class="readmore" href="#">read more</a> </div>
                                <div class="single_left_coloum floatleft"> <img src="assets/reporter/images/single_featured.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                                        dolor eu mattis.</p>
                                    <a class="readmore" href="#">read more</a> </div>
                                <div class="single_left_coloum floatleft"> <img src="assets/reporter/images/single_featured.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper 
                                        dolor eu mattis.</p>
                                    <a class="readmore" href="#">read more</a> </div>
                            </div>
                            <div class="single_left_coloum_wrapper gallery">
                                <h2 class="title">gallery</h2>
                                <a class="more" href="#">more</a> <img src="assets/reporter/images/single_featured.png" alt="" /> <img src="assets/reporter/images/single_featured.png" alt="" /> <img src="assets/reporter/images/single_featured.png" alt="" /> <img src="assets/reporter/images/single_featured.png" alt="" /> <img src="assets/reporter/images/single_featured.png" alt="" /> <img src="assets/reporter/images/single_featured.png" alt="" /> </div>
                            <div class="single_left_coloum_wrapper single_cat_left">
                                <h2 class="title">tech news</h2>
                                <a class="more" href="#">more</a>
                                <div class="single_cat_left_content floatleft">
                                    <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                                    <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                                </div>
                                <div class="single_cat_left_content floatleft">
                                    <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                                    <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                                </div>
                                <div class="single_cat_left_content floatleft">
                                    <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                                    <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                                </div>
                                <div class="single_cat_left_content floatleft">
                                    <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                                    <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                                    <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                                </div>
                            </div>
                        </div>
                        <div class="right_coloum floatright">
                            <div class="single_right_coloum">
                                <h2 class="title">from the desk</h2>
                                <ul>
                                    <li>
                                        <div class="single_cat_right_content">
                                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</h3>
                                            <p>Nulla quis lorem neque, mattis venen atis lectus. In interdum ull amcorper dolor eu mattis.</p>
                                            <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_cat_right_content">
                                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</h3>
                                            <p>Nulla quis lorem neque, mattis venen atis lectus. In interdum ull amcorper dolor eu mattis.</p>
                                            <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_cat_right_content">
                                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit</h3>
                                            <p>Nulla quis lorem neque, mattis venen atis lectus. In interdum ull amcorper dolor eu mattis.</p>
                                            <p class="single_cat_right_content_meta"><a href="#"><span>read more</span></a> 3 hours ago</p>
                                        </div>
                                    </li>
                                </ul>
                                <a class="popular_more" href="#">more</a> </div>
                            <div class="single_right_coloum">
                                <h2 class="title">editorial</h2>
                                <div class="single_cat_right_content editorial"> <img src="assets/reporter/images/editorial_img.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
                                </div>
                                <div class="single_cat_right_content editorial"> <img src="assets/reporter/images/editorial_img.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
                                </div>
                                <div class="single_cat_right_content editorial"> <img src="assets/reporter/images/editorial_img.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
                                </div>
                                <div class="single_cat_right_content editorial"> <img src="assets/reporter/images/editorial_img.png" alt="" />
                                    <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Right -->
                    <div class="sidebar floatright">
                        <div class="single_sidebar"> <img src="assets/reporter/images/add1.png" alt="" /> </div>
                        <div class="single_sidebar">
                            <div class="news-letter">
                                <h2>Sign Up for Newsletter</h2>
                                <p>Sign up to receive our free newsletters!</p>
                                <form action="#" method="post">
                                    <input type="text" value="Name" id="name" />
                                    <input type="text" value="Email Address" id="email" />
                                    <input type="submit" value="SUBMIT" id="form-submit" />
                                </form>
                                <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
                            </div>
                        </div>
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
                        <div class="single_sidebar"> <img src="assets/reporter/images/add1.png" alt="" /> </div>
                        <div class="single_sidebar">
                            <h2 class="title">ADD</h2>
                            <img src="assets/reporter/images/add2.png" alt="" /> </div>
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