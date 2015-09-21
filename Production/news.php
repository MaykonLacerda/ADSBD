<?php
//Includes
include_once 'library/include/textpage.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title><?php echo $titleSub;?>Notícias</title>
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
                        <div class="news_box">
                            <h2>Morbi sed nulla ac est cursus </h2>		
                            <div class="news_meta">May 30th, 2048 | <a href="#">Web Templates</a> by <a href="#">George</a></div>      
                            <img src="library/images/templatemo_image_03.jpg" alt="TemplatemoImage03" />
                            <p>Vestibulum auctor euismod mi et tincidunt. Mauris  vitae ipsum diam, sagittis tempor velit. Sed fringilla accumsan mi, et gravida mauris elementum ac. Praesent vel felis id lectus bibendum tempor sed sagittis tellus. Morbi mattis, nunc at euismod luctus, lacus neque volutpat est, at pharetra lacus erat nec mauris. Vivamus id quam lacus, et vestibulum nisi. Vivamus eu ipsum eget nulla posuere porttitor. Mauris felis mauris, pretium venenatis laoreet eu, ornare nec lorem. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                          <div class="cleaner_h20"></div>
                          <div class="float_l"><a href="#" class="comment">512 comments</a></div> 
                          <div class="btn_more float_r"><a href="#">More</a></div>  
                            <div class="cleaner"></div>
                        </div>
                        <div class="news_box news_box_last">
                            <h2> Donec et purus velit, eget euismod</h2>		
                            <div class="news_meta">May 15th, 2048 | <a href="#">User Interfaces</a> by <a href="#">Steven</a></div>  
                            <img src="library/images/templatemo_image_04.jpg" alt="Image 04" />
                            <p>Suspendisse non mi a dui viverra aliquam at id urna. Curabitur erat lacus, auctor in dictum non, dapibus porta dolor. In blandit iaculis massa. Cras suscipit condimentum dolor, in facilisis est adipiscing convallis. Morbi vitae velit eget sem ullamcorper tempus. Aliquam erat volutpat. Donec sapien nulla, venenatis ac volutpat a, placerat eu velit. Suspendisse elit ipsum, fermentum nec tristique ut, pretium quis orci. Ut ut tortor ac elit lobortis bibendum. Nulla facilisi. Aliquam erat volutpat. </p>
                            <div class="cleaner_h20"></div>
                            <div class="float_l"><a href="#" class="comment">256 comments</a></div> 
                            <div class="btn_more float_r"><a href="#">More</a></div>  
                            <div class="cleaner"></div>
                        </div>     
                    </div>
                    <div class="col_w300 col_last">
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