<?php
//Includes
include_once 'library/include/textpage.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title><?php echo $title;?></title>
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
                                <span><?php echo $slogam; ?></span>
                            </a>
                        </h1>
                    </div> <!-- end of site_title -->
                    <div id="templatemo_menu">
                        <?php include './library/include/menu_horizontal.php'; ?>
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
                    <div class="col_w300">
                        <?php include './library/include/colnews.php'; ?>
                    </div>
                    <div class="col_w300">
                        <h2><span>SERVIÇOS</span></h2>
                        <div class="image_wrapper">
                            <img width="240" height="110" src="library/images/templatemo_image_01.jpg" alt="Image01" /></div>
                            <p>
                                <em>Morbi sed nulla ac est cursus suscipit eu ac lectus. Curabitur  ullamcorper nibh nisi, sed eleifend dolor. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.
                                </em>
                            </p>
                        <ul class="tmo_list">
                            <li>Duis bibendum diam et eros</li>
                            <li>Etiam accumsan ante ac augue</li>
                            <li>Nullam faucibus tortor in sem</li>
                            <li>Phasellus cursus congue arcu</li>                        
                        </ul>
                        <div class="cleaner"></div>
                        <div class="btn_more"><a href="services.php">Leia mais</a></div>
                    </div>
                    <div class="col_w300 col_last">
                        <h2><span>Sobre nós</span></h2>
                        <div class="image_wrapper">
                            <img width="240" height="110" src="library/images/templatemo_image_02.jpg" alt="Image 02" /></div>
                            <p>
                                <em>Etiam ut urna ante, ut pulvinar ante. Vivamus a metus quam. Aenean non eros nunc. 
                                </em>
                            </p>
                            <p>Sailing is Free CSS Template provided by <strong>templatemo</strong> website. Feel free to download and use this template for your websites. Credits go to <a rel="nofollow" href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos and <a rel="nofollow" href="http://www.brusheezy.com/brush/1400-24-Clouds" target="_blank">Milanda Design</a> for a Photoshop Brush. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac elit est, eget hendrerit erat.</p>
                      <div class="btn_more"><a href="about.php">Leia mais</a></div>
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