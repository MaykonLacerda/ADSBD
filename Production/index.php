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
                        <?php include './library/include/servicos.php'; ?>
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