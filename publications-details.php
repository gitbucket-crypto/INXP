<?php

php_ini_loaded_file();

require_once ('ypanel/web-inf/database.class.php');

 $result;

 $id;

if(!empty($_GET['s_title']))
{
    $id = $_GET['s_title'];
  
}    
 
?>

<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Instituto Neurológico de São Paulo - INESP</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.png">

    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/slicknav.min.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/typography.css">

    <link rel="stylesheet" href="assets/css/default-css.css">

    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- modernizr css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/lock.js"></script>
     <script type="text/javascript">
            function func()
            {
                  onload();
                  /**  window.onload = function() {
                     document.onkeydown = function(e) {
                     var code = e.keyCode || e.which;
                     if(e.ctrlKey && (code == 80 || code == 112 || code==83)) {
                     e.preventDefault && e.preventDefault();
                     return false;
                         }
                        }
                     }**/

                 if (navigator.userAgent.match(/Mobile/))
                 {
                      var el = document.getElementById("logo");
                      el.innerHTML="<img src='assets/images/icon/logo.png' width=\'80%!important;\' height=\ '80%!important;\'>";
                          /**alert(el.innerHTML); **/
                 }
                 else
                {
                    var el = document.getElementById("logo");
                     el.innerHTML="<img src='assets/images/icon/logo.png' >";
;
                }
            }
        </script>

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  

</head>



<body onload="func();" data-spy="scroll" data-target=".site-navbar-target" oncontextmenu="return false"

    ondragstart="return false" onmouseover="window.status='..message perso .. '; return true;"

    class="landing is-preload" onselectstart="return false">

    <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->

    <!-- preloader area start -->

    <div id="preloader">

        <img src="assets/images/loader.gif" alt="loader">

    </div>

    <!-- prealoader area end -->

    <!-- header area start -->

    <header id="header">

            <!-- header top area start -->

            <div class="header-top">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-md-3">

                            <ul class="ht-social">

                                <li><a href="https://www.facebook.com/institutoneurologicodesaopaulo" target="_blank"><i class="fa fa-youtube"></i></a></li>

                                <li><a href="https://www.youtube.com/channel/UC5DFq4mXM9tXMLo0jCRwFbQ/videos"  target="_blank"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="" onclick="return theFunction();" ><i class="fa fa-whatsapp"></i></a></li>


                            </ul>

                        </div>

                        <div class="col-md-9">

                            <ul class="ht-contacts">

                                <li><a href="#"><i class="fa fa-clock-o"></i>Seg - Sex 7.00 - 19.00</a></li>

                                <li><a href="mailto:faleconosco@institutoneurologico.com.br" target="_blank"><i class="fa fa-envelope"></i>faleconosco@institutoneurologico.com.br</a></li>

                                <li><a href="#"><i class="fa fa-phone"></i>(11)3141.9553 / 3141.9556</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- header top area end -->

            <!-- header bottom area start -->

          
        <div class="header-bottom-wrapper transparent-header"  style="margin-top: 45px !important;">
            <div class="header-bottom" >

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-lg-3">

                            <div class="logo">

                                <a href="index.html"><div id='logo'></div></a>

                            </div>

                        </div>

                        <div class="col-lg-9 d-none d-lg-block">

                            <div class="main-menu">

                                <nav>

                                    <ul id="nav_mobile_menu">

                                        <li class="active"><a href="index.html">Início</a>

                                            <li class="submenu">

                                                <!-- <li><a href="index-2.html">Home One</a></li>

                                                <li><a href="index2.html">Home Two</a></li>

                                                <li class="active"><a href="index3.html">Home Three</a></li>

                                                <li><a href="covid-19.html">Covid-19</a></li>-->

                                            </li>

                                        </li>

                                        <li><a href="about.html">Sobre</a>

                                            <li class="submenu">

                                                <!--<li><a href="about.html">About One</a></li>

                                                <li><a href="about2.html">About Two</a></li>-->

                                            </li>

                                        </li>

                                        <li><a href="doctors/doctor.html">Doutores</a>

                                            <li class="submenu">

                                                <!--<li><a href="doctor.html">Doctors</a></li>

                                                <li><a href="doctor-details.html">Doctor Details</a></li>-->

                                            </li>

                                        </li>

                                        <li><a href="javascript:void(0)">Especialidades</a>

                                            <ul class="submenu">

                                                <li><a href="expertise/pain_clinic.html">Clinica da Dor</a></li>
                                                <li><a href="expertise/epilepsy_clinic.html">Clinica de Epilepsia</a></li>
                                                <li><a href="expertise/neurosurgery.html">Neurocirurgia</a></li>
                                                <li><a href="expertise/neuroendocrinology.html">Neuroendorinologia</a></li>
                                                <li><a href="expertise/neurology.html">Neurologia</a></li>
                                                <li><a href="expertise/neuropsychology.html">Neuropsicologia</a></li>
                                                <li><a href="expertise/health-psychology.html">Psicologia da Saúde</a></li>
                                                <li><a href="expertise/psychiatry.html">Psiquiatria</a></li>

                                            </ul>

                                        </li>

                                        <li><a href="javascript:void(0)">Ao Paciente</a>

                                            <ul class="submenu">                                          
                                                <li><a href="appointment.html">Agendamento</a></li>
                                                 <li><a href="contact-us.html">Contato</a></li>
                                                <li><a href="alliance.html">Convênios</a></li>
                                                <li><a href="faq.html">F.A.Q</a></li>
                                                <li><a href="glossary/glossary.html">Glossário de Doenças</a></li>
                                            </ul>

                                        </li>

                                        <li><a href="javascript:void(0)">Publicações</a>

                                            <ul class="submenu">


                                                <li> <a href="publications.php">Artigos
                      </a></li>

                                                <li><a href="404.html">404</a></li>

                                                <li><a href="comingsoon.html">Coming soon</a></li>

                                            </ul>

                                        </li>
                                          <li class="active"><a href="contact-us.html"><icon class='fa fa-envelope'></a></icon>

                                            <li class="submenu">

                                                <!-- <li><a href="index-2.html">Home One</a></li>

                                                <li><a href="index2.html">Home Two</a></li>

                                                <li class="active"><a href="index3.html">Home Three</a></li>

                                                <li><a href="covid-19.html">Covid-19</a></li>-->

                                            </li>

                                        </li>
                                    </a>
                                </li>
                            </ul>

                                    </ul>

                                </nav>

                                <div class="humburger-btn"><i class="fa fa-search"></i></div>

                            </div>

                        </div>

                        <div class="col-12 d-block d-lg-none">

                            <div id="mobile_menu"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- header bottom area end -->


    </header>

    <!-- header area end -->



    <!-- breadcumb-area start  -->

    <div style="background: url(assets/images/bg/breadcumb5.jpg) no-repeat center center / cover;"

        class="breadcumb-area">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <h2 class="breadcumb-title">Artigo</h2>

                    <ul class="breadcumb-menu">

                        <li><a href="index.html">Home</a></li>

                        <li><a href='publications.php'>Publicações INESP</a></li>

                        <li>Artigo</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!-- breadcumb-area end  -->

    <div class="tostfyMessage">

        <span class="tostfyClose">&times;</span>

        <div class="messageValue"></div>

    </div>

    <!-- blog area start -->

    <div class="blog-area blog-classic-area">

        <div class="container">
           <?php
               // $title = $_GET['s_title'];
           
               if(!empty($id))
               {
                   
                    $sql = "SELECT * FROM `ynesp`.`tb_artigo` WHERE id=".$id;
                    //echo $sql;
                    $db = DB::getInstance();     
                    $stm = $db->prepare($sql);  
                    $stm->execute();
                    $result=$stm->fetchAll(PDO::FETCH_ASSOC); 
                    if(sizeof($result)==0)
                    {
                        $url='404.html';
                        echo '<script type="text/javascript">';
                        echo 'window.location.href="'.$url.'";';
                        echo '</script>';
                        echo '<noscript>';
                        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
                        echo '</noscript>'; exit;
                    }    
               } 
            ?>

            <div class="row">

                <div class="col-12 col-lg-8">

                    <div class="blog-single">

                        <div class="thumb">
                           <?php
                                //echo $result[0]['imagem_path'];
                                if(!empty($result))
                                 {
                                      $path="ypanel/active-inf/". $result[0]['imagem_path']; 
                                      
                                      echo '<img src="'.$path.'" style="width:795px; height: auto;">';
                                 }   
                           ?>


                        </div>

                        <div class="content">

                            <ul class="blog-meta-top">
                                <li>Autor(es):</li>

                                <li><i class="fa fa-user"></i><?php echo  $result[0]['autor_prin']; ?></li>
                                <?php if(!empty($result[0]['autor_sec'])) {echo '<li><li><i class="fa fa-user"></i>'.$result[0]['autor_sec'].'</li>'; }?>
                                <?php if(!empty($result[0]['autor_terc'])) {echo '<li><li><i class="fa fa-user"></i>'.$result[0]['autor_terc'].'</li>' ;}?>

                                <li><i class="fa fa-tags"></i><span>tags:</span> <?php echo $result[0]['tags'] ?> </li>

                            </ul>

                            <h3><a href="javascript:void(0);"><?php echo  $result[0]['titulo']; ?></a></h3>

                            <p><?php echo  $result[0]['resumo']; ?></p>

                           
                            
                            <?php $pdf ="ypanel/active-inf/".$result[0]['pdf_path'] ?>                          
                           
                            <p><h6><a href="<?php echo $pdf; ?>" <?php echo  $pdf; ?> download style="color:#2c76e2;"> Leia na Integra</a></h6></p>

                        </div>

                    </div>
                  
                    <!-- ==============================================================================================================-->
                    <?php

                            $sql = "SELECT * FROM `ynesp`.`tb_comment` WHERE id_artigo=".$_GET['s_title']." ORDER BY data_criacao DESC";
                            $db = DB::getInstance();     
                            $stm = $db->prepare($sql);  
                            $stm->execute();
                            $result=$stm->fetchAll(PDO::FETCH_ASSOC); 
                           
                                if(sizeof($result)!==0)
                                {
                                     $i=0;
                                      echo ' <div class="comment-wrapper">'; 
                                            echo '  <h3 class="comment-title">Comentarios</h3>';
                                            echo '<ul class="comment-items">';
                                     for ($i = 0; $i <= sizeof($result); $i++)     
                                     {

                                        if(!empty($result[$i]))
                                        {
                                            $arr = explode('-', $result[$i]['data_criacao']);
                                             echo '<li class="comment-item comment-item2">' ;
                                                echo ' <div class="comment-img">';
                                                echo  ' <img src="assets/images/blog/comment0.png" alt="">';
                                            echo '</div>';
                                            echo ' <div class="comment-content">';
                                                echo '<h5>'.$result[$i]["nome"].'</h5>';
                                                echo '<span>'.$arr[2].'/'.$arr[1].'/'.$arr[0].'</span>';
                                                echo '<p>'.$result[$i]["comentario"].'</p>';
                                            echo '</div>';
                                            echo '</li>';
                                            
                                        }
                                          
                                     } echo '</ul>';   
                                      echo '</div>';    
                                     
                                }   
                               
                    
                    ?>
                    <!-- ==============================================================================================================-->
                    

                               

                           

                           

                    <div class="leave-comments">

                        <h3 class="comment-title">Deixar Comentário</h3>

                        <form id="commentAdd" name='commentAdd' method="POST">

                            <div class="form-group">

                                <input name="name" type="text"  placeholder="Seu Nome *"

                                    class="form-control form-bg-gray">

                            </div>

                            <div class="form-group">
                                <input type="hidden" name='id' value="<?php echo htmlspecialchars($_GET['s_title']); ?>">

                                <input name="email" type="text" placeholder="Seu Email*"

                                    class="form-control  form-bg-gray">

                            </div>

                            <div class="form-group">

                                <input name="website" type="text"  placeholder="Website *"

                                    class="form-control  form-bg-gray">

                            </div>

                            <div class="form-group">

                                <textarea name="comment" class="form-control  form-bg-gray"

                                    placeholder="Comentario *"></textarea>

                            </div>

                            <div class="form-group">

                              
                            </div>

                            <div class="form-group">

                                <button type="submit" id='btnCadastra' name='btnCadastra' class="btn btn-primary px-5 text-uppercase btn-radius">Enviar</button>
                                <button type="reset" class="btn btn-primary px-5 text-uppercase btn-radius">Cancelar</button>
                            </div>

                        </form>

                    </div>

                </div>

                <div class="col-lg-4 col-12">

                    <aside class="blog-sidebar">

                        <div class="search-form">

                            <form>

                                <input type="text" placeholder="Search">

                                <button><i class="fa fa-search"></i></button>

                            </form>

                        </div>

                        <div class="widget widget-tags">

                            <h2 class="widget-title">Categorias</h2>

                            <ul class="tags-items">

                                <li><a href="#">Helthy</a></li>

                                <li><a href="#">Cardiolgy</a></li>

                                <li><a href="#">articale</a></li>

                                <li><a href="#">medihelp</a></li>

                                <li><a href="#">career</a></li>

                                <li><a href="#">psychology</a></li>

                            </ul>

                        </div>

                        <div class="widget widget-opening-hour">

                            <h2 class="title">Opening Hours</h2>

                            <ul>

                                <li>Monday : <span>08.00 - 10.00</span></li>

                                <li>Tuesday : <span>08.00 - 10.00</span></li>

                                <li>Wednesday : <span>08.00 - 10.00</span></li>

                                <li>Thursday : <span>08.00 - 10.00</span></li>

                                <li>Friday : <span>08.00 - 10.00</span></li>

                                <li>Saturday : <span>08.00 - 10.00</span></li>

                                <li>Saturday : <span>08.00 - 10.00</span></li>

                                <li>Sunday : <span>08.00 - 10.00</span></li>

                            </ul>

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </div>

    <!-- blog area end -->

    <!-- footer area start -->
    <footer>

        <!-- footer area top start -->

        <div class="footer-top ptb--60">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-sm-6">

                        <div class="fwidget fwidget-company">

                            <div class="flogo"><a href="index.html"><img src="assets/images/icon/logo.png"

                                        alt="logo"></a></div>

                            <p style="color: white;">Fundado em 1970, o Instituto de Neurológico de São Paulo - INESP tem, uniquely experienced team of qualified  executives in the fields of medicine.</p>

                            <form action="#" class="subscription">

                                <input type="text" placeholder="Enter your email address....." class="form-control">

                                <button class="btn btn-default"><i class="fa fa-paper-plane"></i></button>

                            </form>

                        </div>

                    </div>

                    <div class="col-lg-2 col-sm-6">

                        <div class="fwidget fwidget-quicklinks">

                            <h4 class="fwidget-title">Quick Links</h4>

                            <ul class="links">

                                <li><a href="#">Appointments</a></li>

                                <li><a href="#">Contact Us</a></li>

                                <li><a href="#">Working hours</a></li>

                                <li><a href="#">About our Clinic</a></li>

                                <li><a href="#">Services</a></li>

                                <li><a href="#">Doctors</a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <div class="fwidget fwidget-recent-post">

                            <h4 class="fwidget-title">Recent Post</h4>

                            <ul class="widget-recent-post">

                                <li>

                                    <div class="thumb">

                                        <img src="assets/images/widget/rc-post1.jpg" alt="rc-post">

                                    </div>

                                    <div class="content">

                                        <p><a href="#">You Want to Know About Dentist</a></p>

                                        <span>01 Decmber 2019</span>

                                    </div>

                                </li>

                                <li>

                                    <div class="thumb">

                                        <img src="assets/images/widget/rc-post2.jpg" alt="rc-post">

                                    </div>

                                    <div class="content">

                                        <p><a href="#">The Science Behind Pediatric Care</a></p>

                                        <span>01 Decmber 2019</span>

                                    </div>

                                </li>

                                <li>

                                    <div class="thumb">

                                        <img src="assets/images/widget/rc-post3.jpg" alt="rc-post">

                                    </div>

                                    <div class="content">

                                        <p><a href="#">How much aspirin to take for stroke</a></p>

                                        <span>01 Decmber 2019</span>

                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <div class="fwidget fwidget-opening-hours">

                            <h4 class="fwidget-title">Opening Hours</h4>

                            <ul class="widget-opening-hours">

                                <li>Monday : <span>08.00 - 10.00</span></li>

                                <li>Tuesday : <span>08.00 - 10.00</span></li>

                                <li>Wednesday : <span>08.00 - 10.00</span></li>

                                <li>Thursday : <span>08.00 - 10.00</span></li>

                                <li>Friday : <span>08.00 - 10.00</span></li>

                                <li>Saturday : <span>08.00 - 10.00</span></li>

                                <li>Sunday : <span>08.00 - 10.00</span></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- footer area top end -->

        <!-- footer area bootom start -->

        <div class="footer-bottom-area">

            <div class="container">

                <div class="row">

                    <div class="col-md-8">

                        <p class="copyright" style="color: white;">©

                            <script>document.write(new Date().getFullYear());</script> Todos Direitos Reservados, Projeto
                                   &amp; Desenvolvimento Para:<a href="/www.institutoneurologico.com.br" style="color: white;">INESP</p>

                    </div>

                    <div class="col-md-4">

                        <ul class="ht-social ft-bottom-sc">

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- footer area bootom end -->

</footer>

    <!-- jquery latest version -->   

    <!-- bootstrap 4 js -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <!-- others plugins -->

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="assets/js/counterup.min.js"></script>

    <script src="assets/js/aos.js"></script>

    <script src="assets/js/waypoints.js"></script>

    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <script src="assets/js/isotope.pkgd.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/countdown.js"></script>

    <script src="assets/js/jquery.validate.min.js"></script>

    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/validation-form.js"></script>

    <script src="assets/js/scripts.js"></script>

      <!--===============================================================================================-->


<script type="text/javascript">

                    //Quando o documento estiver pronto
                    jQuery(document).ready(function(){

                        var btn = $("#btnCadastra");

                        btn.on("click", function(){
                        //var dados = $("#form_envio").serialize();
                        //chama a função ajax()
                        //datatype: "HTML",
                        jQuery.ajax({
                            url: "ypanel/web-inf/commnets.add.class.php",
                                type: "POST",  /*method*/
                                data: $("#commentAdd").serialize(),
                                success: function( response )
                                {
                                     var obj = JSON.parse(response);

                                    switch(obj.id)
                                    {
                                            case 10:case '10': alert(obj.msg); break;
                                            case 20:case '20': alert(obj.mail); window.location.reload(); break;
                                     }
                                }
                            });
                           
                        });
                    });
    </script>

<!--===============================================================================================-->

</body>




<!-- Mirrored from demo.voidcoders.com/htmldemo/medhelpV2/medhelp-center/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Aug 2020 21:14:46 GMT -->
</html>