<?php
//Includes
include_once 'library/include/textpage.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title><?php echo $titleSub;?>Serviços</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="library/css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="library/css/content_slider_style.css" />
        <script type="text/javascript" src="library/js/jquery.1.3.2.min.js" ></script>
        <script type="text/javascript" src="library/js/jquery-ui.min.js" ></script>
        <script type="text/javascript">
                $(document).ready(function(){
                        $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
                });
        </script>
    </head>
    <body>
        <div id="templatemo_wrapper_outer">
            <div id="templatemo_wrapper">
                <div id="templatemo_header">
                    <div id="site_title">
                        <h1>
                            <a href="index.php"><img src="library/images/templatemo_logo.png" alt="<?php echo $title;?>" />
                                <span><?php echo $slogam;?></span>
                            </a>
                        </h1>
                    </div> <!-- end of site_title -->
                    <div id="templatemo_menu">
                        <ul>
                            <?php include './library/include/menu_horizontal.php'; ?>
                        </ul>    	
                    </div> <!-- end of templatemo_menu -->
                </div> <!-- end of templatemo_header -->
                <div id="templatemo_slider">
                    <div id="featured" >
                        <ul class="ui-tabs-nav">
                            <?php include './library/include/uitabnav.php'; ?>
                        </ul>
                        <?php include './library/include/fragmentslider.php'; ?>
                    </div>
                </div> <!-- end of templatemo_slider -->
                <div id="templatemo_content">
                    <div class="col_w600">
                        <div class="service_box">
                            <img src="library/images/onebit_15.png" alt="Service 1" />
                            <div class="sb_right">
                                <h4>Web Design</h4>
                                <p>Credit goes to <a rel="nofollow" href="http://www.icojoy.com/articles/46/" target="_blank">icojoy.com</a> for icons. Morbi sed nulla ac est cursus suscipit. Nullam consectetur posuere porta. Aliquam laoreet, libero ac placerat  tempor.</p>
                                <ul class="tmo_list">
                                    <li>Vestibulum pretium convallis diam sit amet </li>
                                    <li>Donec consequat, lacus eget accumsan volutpat</li>
                                    <li>Fusce sem nulla, rutrum ac suscipit eget vitae</li>
                                </ul>
                            </div>  
                            <div class="cleaner"></div>
                            <div class="btn_more float_r"><a href="#">More</a></div>
                            <div class="cleaner"></div>
                        </div>
                         <div class="service_box">
                            <img src="library/images/onebit_16.png" alt="Service 2" />
                            <div class="sb_right">
                                <h4>Online Advertising</h4>
                                <p>Integer consectetur enim eget diam tincidunt vehicula. Aenean scelerisque tellus vitae tortor placerat egestas.</p>
                                <ul class="tmo_list">
                                    <li>Praesent lacus metus, aliquet sit </li>
                                    <li>Nunc eget turpis mattis nisi auctor</li>
                                    <li>Vestibulum pharetra tortor vitae velit </li>
                                </ul>
                            </div>
                            <div class="cleaner"></div>
                            <div class="btn_more float_r"><a href="#">More</a></div>
                            <div class="cleaner"></div>
                        </div>
                        <div class="cleaner"></div>
                        <div class="service_box">
                            <img src="library/images/onebit_19.png" alt="Service 3" />
                            <div class="sb_right">
                                <h4>Global Reaching</h4>
                                <p>Praesent gravida gravida pellentesque. Fusce lectus nulla, adipiscing at aliquam vitae, placerat sed leo. </p>
                                <ul class="tmo_list">
                                    <li>Quisque purus sem, egestas nec tincidunt hendrerit</li>
                                    <li>Excepteur sint occaecat cupidatat non proident </li>
                                    <li>Nam id nisl vel magna tempus faucibus fermentum iaculis mi</li>
                                </ul>		
                            </div>
                            <div class="cleaner"></div>
                            <div class="btn_more float_r"><a href="#">More</a></div>
                            <div class="cleaner"></div>
                        </div>      
                    </div>
                    <div class="col_w300 col_last">
                        <?php include './library/include/sobre.php'; ?>
                    </div>
                    <div class="cleaner"></div>
                </div>
                <div class="cleaner"></div>
            </div>
        </div>
        <div id="templatemo_footer_wrapper">
            <?php include './library/include/footer.php'; ?>    
        </div>
    </body>
</html>
