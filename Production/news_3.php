<?php
//Includes
include_once 'library/include/textpage.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                            <div class="news_meta">Maio, 2017 | <a href="#">ADSBD</a> Por <a href="#">ADSBD</a></div>      
                            <p>
                            <div align="center">
                                <table border="1" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td width="432" colspan="2">
                                                <p align="center">
                                                    ADSBD – Associação dos Doadores de Sangue de Bom
                                                    Despacho
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="432" colspan="2">
                                                <p align="center">
                                                    LOCAL: PRAÇA OLEGÁRIO MACIEL, 831 – CENTRO (SEDE DA
                            ADSBD), HORÁRIO DAS COLETAS: DE 08 ÀS 13 HORAS.<strong>Agende sua doação: 3521-3275/ </strong>                        <strong>99807-0603</strong>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="55" rowspan="6">
                                                <p align="center">
                                                    <strong>1º Semestre </strong>
                                                    <strong>2017</strong>
                                                    <strong></strong>
                                                </p>
                                            </td>
                                            <td width="377">
                                                <p align="center">
                                                    <strong>MESES/DATAS</strong>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="377">
                                                <p align="center">
                                                    FEVEREIRO – 07 E 21
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="377">
                                                <p align="center">
                                                    MARÇO – 07 E 21
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="377">
                                                <p align="center">
                                                    ABRIL – 04 E 18
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="377">
                                                <p align="center">
                                                    MAIO – 02, 16 E 30
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="377">
                                                <p align="center">
                                                    JUNHO – 13 E 27
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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