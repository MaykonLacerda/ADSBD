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
                            <h2>Informações de contato</h2>
                            <p>
                                Entre contato com a ADSBD, conheça nossa instituição.
                            </p>
                        <div class="cleaner_h30"></div>
                        <div class="col_w280 float_l">
                            <h6>Endereço:</h6>
                            Praça Olegário Maciel, 831 - Centro<br />
                            Bom Despacho - MG<br />
                            CEP: 35600-000<br /><br />
                            Tel: +55 - 37-3521-3275<br />
                        </div>
                        <div class="cleaner_h50"></div>
                        <div id="contact_form">
                            <h4>Enviar um e-mail:</h4>
                            <form method="post" name="contact" action="#">
                                <div class="col_w280 float_l">
                                    <label for="author">Name:</label> <input type="text" id="author" name="nome" class="required input_field" />
                                    <div class="cleaner_h10"></div>
                                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                                    <div class="cleaner_h10"></div>
                                    <label for="subject">Assunto:</label> <input type="text" name="assunto" id="subject" class="input_field" />
                                    <div class="cleaner_h10"></div>
                                </div>						
                                <div class="col_w280 float_r">
                                    <label for="text">Mensagem:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                                    <div class="cleaner_h10"></div>
                                    <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Enviar" />
                                    <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Limpar" />
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