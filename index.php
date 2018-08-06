<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Desafio Cafundo">
    <meta name="author" content="Agny Diego">

    <title>ScienceNews</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="img/icone.png" />
	
</head>

<body id="page-top" >
	<div class="col-lg-12">
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid bg-primary">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">	
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse col-lg-10" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#" title="Volte para a página inicial">The Society</a>
                    </li>
					<li>
                        <a href="life_e_evolution.php" title="">Science News</a>
                    </li>
                    <li>
                        <a href="life_e_evolution.php" title="">Science News for Students</a>
                    </li>
                    
                    <li>
                        <a href="life_e_evolution.php" title="">Student Science</a>
                    </li>
                    
                </ul>
			</div>
			<div class="collapse navbar-collapse col-lg-2 pull-right">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" class="btn btn-primary">LogIn</a>
                    </li>
                    <li>
						<a href="#" class="btn btn-danger">Donate</a>
                    </li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
			
        </div>
        <!-- /.container-fluid -->
    </nav>
	<div class='menuOP'>
		<div class="container-fluid col-lg-offset-1">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-lg-6">
                <a class="navbar-brand page-scroll pull-left" href="#">ScienceNews</a>
				<span class="pull-left">Magazine of the Society for Science & the public</span>
				<button type="button" class="btn-primary navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-search"></i>
                </button>
				<button type="button" class="btn-primary navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#nav_menu">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i>
                </button>
            </div>
			
            <!-- Navbar formulário de pesquisa -->
            <div class="collapse navbar-collapse col-lg-6 pull-right" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li style="padding-top:7px;">
						<form class="form-inline" name="consulta" id="consulta" method="post" action="consulta.php">
							<div class="form-group multiple-form-group input-group col-lg-12">
								<input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Search Science News" required="required"/>
								<span class="input-group-btn">
									<button type="submit" class="btn btn-default btn-add"><i class="fa fa-search"></i></button>
								</span>
								
							</div>
						</form>
                    </li>
                </ul>
				
            </div>
            <!-- /.navbar formulário de pesquisa -->
			<div class="collapse navbar-collapse col-lg-12 pull-left" id="nav_menu">
                <ul class="nav navbar-nav navbar-left" id="menu2">
                    <li>
                        <a href="#" title=""> <i class="fa fa-align-justify"></i> MENU </a>
                    </li>
					<li>
                        <a href="#" title="">TOPICS</a>
                    </li>
                    <li>
                        <a href="#" title="">BLOGS</a>
                    </li>
                    
                    <li>
                        <a href="#" title="">EDITORS PICKS</a>
                    </li>
					<li>
                        <a href="#" title="">MAGAZINE</a>
                    </li>
                    
                </ul>
			</div>
        </div>
        <!-- /.container-fluid -->
    </div>
	<!--Menu Lateral -->
	<div class="col-lg-3 no-padding text-center col-lg-offset-1">
	<aside class="right-sidebar">
				
		<div class="widget">
			<ul class="cat">
				<div class="header tabs row-fluid">
				<ul class="nav nav-tabs panel-primary">
					<li class="active"><a href="#latest" data-toggle="tab">Latest</a></li>
					<li><a href="#most-viewed" class="bg-primary" data-toggle="tab">Most Viewed</a></li>
				</ul>   
				</div>

				<div class="tab-content">
					<div class="tab-pane pane active panel panel-default" id="latest">
					<?php
					require_once("post_categoria.class.php");
					//exibe as 6 ultimas postagens da categoria life & evolution
					$post = new filter_categoria();
					$get_panel = $post->getPost_panel();
						
					?>                             
					</div>
					<div class="tab-pane pane panel panel-default" id="most-viewed">
					<?php
					require_once("post_categoria.class.php");
					//exibe as 6 ultimas postagens mais visualizadas da categoria life & evolution
					$post = new filter_categoria();
					$get_panel = $post->getPost_panel2();
						
					?> 								
					</div>
				  </div>
			</ul>
		</div>
					
	</aside>
    
	</div><!-- Fim do menu Lateral-->
	<!-- Corpo do blog--->
	<div class="col-lg-7 no-padding text-center">
    <br/>
    <section class="no-padding">
		<div class="col-lg-12 text-center">
			<div class="container-fluid">
				<div class="row no-gutter">
					<?php
					require_once("post_categoria.class.php");
					//exibe as 4 postagens mais visualizadas da categoria life & evolution
					$post = new filter_categoria();
					$get_postagem = $post->getTopPostagem();
						
					?>
				</div>
				
			</div>
		</div>
		<div class="col-lg-12 text-center">
			<div class="container-fluid">
				<div class="row no-gutter">
					<?php
					require_once("post_categoria.class.php");
					//exibe as 4 postagens mais visualizadas da categoria life & evolution
					$post = new filter_categoria();
					$get_postagem = $post->getPostagens();
						
					?>
				</div>
				
			</div>
		</div>
	</section>
	<div class="container footer">
			<div class="row">
			
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
						<h4>Subscriber Services</h4>		
						<p><a href="#">Subscriber</a></p>
						<p><a href="#">Renew</a></p>
						<p><a href="#">Give a Gift Subscription</a></p>
						<p><a href="#"><b>Donate</b></a></p>
					</div>
                </div>
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h4>About Science News</h4>
                        <p><a href="#"><b>FAQ</b></a></p>
						<p><a href="#"><b>Carrees</b></a></p>
						<p><a href="#"><b>Contact Us</b></a></p>
						
                    </div>
                </div>
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <h4>Rights and Permisions</h4>
                         <p><a href="#"><b>Advertise</b></a></p>
						<p><a href="#"><b>Terms and policies</b></a></p>
						<p><a href="#">Privacy Policy</a></p>
                    </div>
                </div>
				<div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        
                        <div class="social-icons col-lg-12">
							<ul>
								<a href="#" class="small"><li><small class="fa fa-twitter sr-icons"></small></li></a>
								<a href="#" class="small"><li><small class="fa fa-facebook sr-icons"></small></li></a>
								<a href="#" class="small"><li><small class="fa fa-google-plus sr-icons"></small></li></a>
							</ul>
						</div>
						<h4><b>My Account Newsletters</b></h4>
                    </div>
                </div>
				<div class="col-lg-12 bg-primary footer" id="contact" style="padding:20px;">
					Copyright &copy; 2018 ScienceNews - desenvolvido por Agny Diego.</a>
                </div>
			</div>
			
        </div>
	</div><!--Fim do corpo do blog-->
        
    </div>
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>