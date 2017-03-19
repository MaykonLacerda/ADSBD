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
                            <h2>Programa&ccedil;&amacr;o da semana nacional do doador volunt&aacute;rio de SANGUE - 2015</h2>		
                            <div class="news_meta">Novembro, 2015 | <a href="#">ADSBD</a> by <a href="#">Lelis</a></div>      
                            <img src="library/img/carro.jpg" alt="Carro" />
                            <p>
                                A Equipe do PACE-BD - Posto Avan&ccedil;ado de Coletas Externas e a Diretoria da ADSBD - Associa&ccedil;&amacr;o dos Doadores de Sangue de Bom Despacho, tem a honra de convidar-lhe (s) a participar das comemora&ccedil;&omacr;es da Semana Nacional do Doador Volunt&aacute;rio de Sangue - 2015, conforme programa&ccedil;&amacr;o a seguir:
                            </p>
                            <p>
                                <b>Dia: 22/11 - Domingo: - Missa em A&ccedil;&amacr;o de Grac&ccedil;as</b><br/>
                                <b>Hor&aacute;rio:</b>&nbsp;18:00 horas<br/>
                                <b>Local:</b>&nbsp;Igreja Santa Efig&ecirc;nia<br/>
                                <b>Endere&ccedil;o:</b>&nbsp;Rua Gustavo Capanema, S/N, Vila Militar - Bom Despacho
                            </p>
                            <p>
                                <b>Dia: 23/11 - Segunda-feira - Entrega de Carteirinhas de S&oacute;cio Doador de Sangue, da ADSBD (Doadores que completaram 05 doa&ccedil;&omacr;es em 2015), e Certificado de Generosidade (Doadores que completaram 10 doa&ccedil;&omacr;es em 2015)</b><br/>
                                <b>Hor&aacute;rio:</b>&nbsp;08:00 &agrave;s 17:00 horas<br/>
                                <b>Local:</b>&nbsp;ADSBD<br/>
                                <b>Endere&ccedil;o:</b>&nbsp;Pra&ccedil;a Oleg&aacute;rio Maciel, 831 - Centro - Bom Despacho
                            </p>
                            <p>
                                <b>Dia: 24/11 - Ter&ccedil;a-feira - "Compartilhando Solidariedade" (Palha&ccedil;inhos Alegria e Anemia)</b><br/>
                                <b>Hor&aacute;rio:</b>&nbsp;09:30 &agrave;s 11:00 horas  <br/>
                                <b>Local:</b>&nbsp;Escola Municipal Lu&iacute;s Machado Filho
                                <b>Endere&ccedil;o:</b>&nbsp;Rua Lu&iacute;s Machado,100, Centro - Serra da Saudade - MG
                            </p>
                            <p>
                                <b>Dia: 25/11 - Quarta-feira - Passeio da Solidariedade (Carreata)</b><br/>
                                <b>Hor&aacute;rio:</b>&nbsp;17:30 horas - Sa&iacute;da da ADSBD<br/>
                                <b>Itiner&aacute;rio:</b>&nbsp;V&aacute;rios Bairros da Cidade 
                            </p> 
                            <p>
                                <b>Dia: 26/11 - Quinta-feira - "Seja um Doador Volunt&aacute;rio de Sangue" (Panfletagem)</b><br/>
                                <b>Hor&aacute;rio:</b>&nbsp;08:00 &agrave;s 17:00 horas<br/>
                                <b>Local:</b>&nbsp;Terminal Rodovi&aacute;rio de Bom Despacho<br/>
                                <b>Endere&ccedil;o:</b>&nbsp;Pra&ccedil;a Oleg&aacute;rio Maciel, S/N - Centro - Bom Despacho
                            </p>    
                            <p>
                                <b>Dia: 27/11 - Sexta-feira - Atividade do Projeto Doador do Futuro/ Futuro Doador "Educando e Conscientizando para Doa&ccedil;&amacr;o Volunt&aacute;ria de Sangue"</b><br/>
                                <b>Hor&aacute;rio:</b>&nbsp;09:30 horas<br/>
                                <b>Local:</b>&nbsp;E.E Irm&amacr; Maria de 1º Grau<br/>
                                <b>Ender&ccedil;o:</b>&nbsp;Pra&ccedil;a Jos&eacute; Alves Machado Filho, 44 - S&amacr;o Vicente - Bom Despacho 
                            </p> 
                            <h2>"Doar sangue &eacute; gesto inigual&aacute;vel de partilhar a vida!"</h2>
                          <div class="cleaner_h20"></div>
                          <div class="float_l"><a href="#" class="comment">0 Com&eacute;nt&aacute;rios</a></div> 
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