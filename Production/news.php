<?php
//Includes
include_once 'library/include/textpage.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title><?php echo $titleSub;?>Not&iacute;cias</title>
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
                            <h2>A&ccedil;&amacr;o entre amigos</h2>		
                            <div class="news_meta">Novembro, 2015 | <a href="#">ADSBD</a> by <a href="#">Lelis</a></div>      
                            <img src="library/img/carro.jpg" alt="Carro" />
                            <p>
                                Estamos fazendo A&ccedil;&amacr;o Entre Amigos para adquirir os equipamentos que ainda buscamos em Divin&oacute;polis, o que causa transtornos nas coletas realizadas de 15 em 15 dias, em Bom Despacho. Com a aquisi&ccedil;&amacr;o destes equipamentos poderemos ter mais dias de coleta, aumentando o n&uacute;mero de doa&ccedil;&omacr;es, atendendo doadores em pelo menos um s&aacute;bado ao m&ecirc;s, e auxiliar cidades vizinhas diminuindo a dist&acirc;ncia das viagens, que hoje s&amacr;o em Divin&oacute;polis. 
                                O ve&iacute;culo foi doado pela C&acirc;mara Municipal de Bom Despacho, com apoio da Prefeitura.  Cada bilhete tem o valor de R$25,00 (vinte e cinco reais) concorrendo ao sorteio de Ford Fiesta - Sedan 2012 e servir&aacute; como ingresso no Evento para realiza&ccedil;&amacr;o do sorteio ao vivo.
                                Se 5.000 (cinco mil) pessoas comprar um ingresso muitas e muitas vidas ser&amacr;o salvas, "Pode ser at&eacute; a sua".
                            </p>
                          <div class="cleaner_h20"></div>
                          <div class="float_l"><a href="#" class="comment">0 Coment&aacute;rios</a></div> 
                          <div class="btn_more float_r"><a href="#">Mais</a></div>  
                            <div class="cleaner"></div>
                        </div>
                        <!--
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
                        -->
                    </div>
                    <div class="col_w300 col_last">
                        <?php include './library/include/servicos.php'; ?>
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