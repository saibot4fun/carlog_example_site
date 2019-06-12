<?
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
    }
?>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>CarLOG - Contato</title>
        <meta name="description" content="Rastreamento e Monitoramento de Veículos Web">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">


        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                  
                                        <li>  <strong><a href=""><i class="fa fa-phone"></i>  55 41 3303-0600</a></strong></li>
                                        <li> <strong><a href=""><i class="fa fa-envelope-o"></i> comercial@carlog.com.br</a></strong></li>
                                      </ul>
                                </div>
                            </div>
                   
                            
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                      <li>
                                     <div class="input-group" >
                                                   <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="Usuario"  style="border:1px solid #CCC;height:70px;" name="usuario" />
                                        
                                                       <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                    <input type="text" class="form-control" placeholder="Senha"  style="border:1px solid #CCC;height:70px;" name="senha"/>
                                                   <span class="input-group-addon ">
                                                   <button type="submit"class="btn btn-primary ">Acessar</button>
                                             </span>
                                  
                                                
                                      </div> 
                                      </li>
                                       
                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start Top Search -->
                <form name="login" action="http://portal.carlog.com.br/login.php" method="POST"> 
                <div class="top-search">
                    <div class="container">
                      <div class="input-group" >
                                                   <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="Usuario"  style="border:1px solid #CCC;height:70px;" name="usuario" />
                                        
                                                       <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                    <input type="text" class="form-control" placeholder="Senha"  style="border:1px solid #CCC;height:70px;" name="senha"/>
                                                   <span class="input-group-addon ">
                                                   <button type="submit"class="btn btn-primary ">Acessar</button>
                                             </span>
                                  
                                                
                                      </div> 
                    
                    
                       
                    </div>
                </div>
                   </form>
                <!-- End Top Search -->


                <div class="container"> 
                 
 
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                     <a href="index.html" >
                            <img src="assets/images/logo_index.png" class="logo" alt="CarLOG" style="height:70px;width:170px;" />
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                       

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>   
                            <li><a href="#contact">Contato</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

             
            </nav>

            <!--Home Sections-->




          

            <!--Business Section-->
            <section id="business" class="business bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                         <div class="col-md-12" style="margin-top: 10%;"  >
                                     
                                      <ul>
                                      <li> <h1 class="text-uppercase"><strong>CarLOG</strong> CONTATO</h1></li>
                                  
                      </div>
<form action="contato.php" method="POST">
<?
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        ?>
        <div class="alert alert-success">
          <strong>Successo!</strong> <?=$_POST['nome']?> sua mensagem enviada com sucesso, em breve entraremos em contato!
        </div>
        <?
    }
?>
  <div class="form-group">
    <label for="formGroupExampleInput">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Sr/Sra" required/>
      <small class="form-text text-muted">Seu nome ou como gostaria de ser chamado.</small>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu@email" required/>
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Telefone:</label>
    <input type="text" class="form-control" id="telefone" placeholder="DD - 0000-0000" required/>
    <div  class="form-text text-muted">
     <small>Por favor escreva seu telefone para retornarmos</small> 
    </div>
  </div>
   <div class="form-group">
   <label for="validationTextarea">Mensagem:</label>
    <textarea class="form-control is-invalid" id="mensagem" placeholder="Sua mensagem" required></textarea>
    <div  class="form-text text-muted">
   <small>    Por favor escreva sua mensagem</small> 
    </div>
  </div>
  
    <button type="submit"class="btn btn-primary " >Enviar</button>
</form>
                    </div>
                  
                </div>
                
            </section>
    




            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-7">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">Sobre nós</h5>
                                    <p class="m-top-20">Há 20 anos levando soluções web voltada em rastreamento e monitoramento de veículos.</p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Localização</h6>
                                            <p>
                                               Rua João Negrão 162,
                                                Centro, Curitiba-PR,
                                                Brasil</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Telefone :</h6>
                                            <p>+55 41 3303-0600</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email  :</h6>
                                            <p>comercial@carlog.com.br</p>
                                        </div>
                                    </div>
                                          <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-facebook"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white"><a href="https://www.facebook.com/RastreamentoCarLOG/" target="_blank" style="color: #FFF;">Facebook</a></h6>
                                           
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->


                            <div class="col-md-5">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                              
                                    <div class="widget_brand m-top-40">
                                        <a href="" class="text-uppercase">CarLOG</a>
                                        <p>Soluções Web </p>
                                        
                                             <div class="container">
                                                       <div class="input-group">
                              
                                                        </div>
                                             </div>
                                    </div>
                                    <ul class="list-inline m-top-20">
                                    
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Criado 
                            por 
                            <a target="_blank" href="http://www.carlog.com.br">Carlog</a> 
                            2018. Todos direitos reservados.
                        </p>
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
<style>
.business_slid .slick-arrow{
    color:#000;
}
.slick-slide{
    height:auto;
}
</style>
