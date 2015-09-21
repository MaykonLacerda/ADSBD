<?php
//Includes
include_once 'library/include/textpage.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title><?php echo $titleSub;?>Contato</title>
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
                    <div class="col_w600">
                            <h2>Contact Information</h2>
                            <p>Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                        <div class="cleaner_h30"></div>
                        <div class="col_w280 float_l">
                            <h6>Location One</h6>
                            144-366 Quisque ornare mi nec dolor, <br />
                            Duis porta mi in est imperdiet, 11260<br />
                            Aliquam lorem nibh<br /><br />
                            Tel: 040-060-8800<br />
                            Fax: 040-060-7700<br />
                        </div>
                        <div class="col_w280 float_r">
                            <h6>Location Two</h6>
                            288-355 Mauris bibendum nunc nisi, <br />
                            Donec sit amet placerat justo, 13600<br />
                            Siam a mollis tempor<br /><br />
                            Tel: 020-040-3340<br />
                            Fax: 020-040-6640<br />
                        </div>
                        <div class="cleaner_h50"></div>
                        <div id="contact_form">
                            <h4>Quick Contact Form</h4>
                            <form method="post" name="contact" action="#">
                                <div class="col_w280 float_l">
                                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                                    <div class="cleaner_h10"></div>
                                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                                    <div class="cleaner_h10"></div>
                                    <label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />
                                    <div class="cleaner_h10"></div>
                                </div>						
                                <div class="col_w280 float_r">
                                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                                    <div class="cleaner_h10"></div>
                                    <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Send" />
                                    <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset" />
                                </div>
                            </form>
                        </div>
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