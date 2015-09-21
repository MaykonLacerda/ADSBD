<?php
//Includes
include_once 'library/include/textpage.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title><?php echo $titleSub;?>Sobre</title>
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
                        <h2>ABOUT US</h2>
                        <div class="image_wrapper image_fl"><img src="/library/images/templatemo_image_04.jpg" alt="Image 04" /></div>
                        <p><em>Curabitur elementum mi sit amet nulla placerat nec vulputate elit pretium. Ut laoreet volutpat nisl vel sagittis.</em></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim lorem ac est dictum vitae mattis purus imperdiet. Ut sed est ut urna posuere faucibus. Nulla imperdiet porta pharetra. Aliquam pharetra suscipit tincidunt. Ut laoreet volutpat nisl vel sagittis. Mauris tempus purus vel orci porta consequat dictum libero rutrum. Integer a fermentum risus. Integer pellentesque malesuada rutrum. </p>
                        <div class="btn_more float_r"><a href="#">Read more</a></div>
                        <div class="cleaner_h50"></div>
                        <h2>OUR <span>COMPANY</span></h2>
                        <p><em>Morbi sed nulla ac est cursus suscipit eu ac lectus. Curabitur  ullamcorper nibh nisi, sed eleifend dolor.</em></p>
                        <p>Donec dignissim lorem ac est dictum vitae mattis purus imperdiet. Ut sed est ut urna posuere faucibus. Nulla imperdiet porta pharetra. Morbi sed nulla ac est cursus suscipit eu ac lectus.  Donec dignissim lorem ac est dictum vitae mattis purus imperdiet. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                        <ul class="tmo_list">
                          <li>Cras rutrum ullamcorper </li>
                            <li>Sed nec eros egestas nisl </li>
                            <li>Tellus dolor faucibus risus </li>
                            <li>Curabitur ullamcorper nibh </li>
                            <li>Pellentesque adipiscing </li>                        
                        </ul>
                        <div class="cleaner"></div>
                        <div class="btn_more"><a href="services.html">Read more</a></div>
                    </div>
                    <div class="col_w300 col_last">
                        <?php include './library/include/colnews.php'; ?>	
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
