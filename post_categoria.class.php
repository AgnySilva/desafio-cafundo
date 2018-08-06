<?php	
	class filter_categoria{
		//declaracao de variaveis publicas e privadas
		public $conexao;
		public $banco;
		public $db;
		public $var;
		public $val;
		public $categoria_nome;
		private $post_id;
		private $post_nome;
		private $post_texto;
		private $post_autor;
		private $post_data;
		
		//cria o obj de conexao com bd
		function __construct(){
			$conexao = mysql_pconnect("localhost","root","usbw") or die (mysql_error());
			$banco = mysql_select_db("desafio_cafundo");
		}
		//recebe o nome da propriedade e o valor a ser atribuido
		function __set($var, $val){
			$this->$var = $val;
		}
		function getTopPostagem(){
			// realiza o select no banco de dados e seleciona as 4 postagens mais visualizadas da categoria life &evolution
			$getTopPostagem = mysql_query("
				SELECT * 
				FROM postagens 
				WHERE post_categoria = 1 
				ORDER BY post_qtde_visualizacao DESC 
				LIMIT 0,4");
			$cont = 0;
			while($l = mysql_fetch_array($getTopPostagem)){
				$this->post_id    = $l["post_id"];
				$this->post_nome  = $l["post_nome"];
				
				if($cont == 0){
					print "<div class='col-lg-12 col-sm-12'>";
						print"<a href='#' title='".$this->post_nome."'>";
						print"<img src='postagem_imagem.php?id_img=".$this->post_id."' class='img-responsive sr-icons' alt=''>";
					print"</div>";	
				}
				else{
					print "<div class='col-lg-4 col-sm-6'>";
						print"<a href='#' title='".$this->post_nome."'>";
						print"<img src='postagem_imagem.php?id_img=".$this->post_id."' class='img-responsive sr-icons' alt=''>";
					print"</div>";
				}
				$cont++;
			}
		}//fim function getPostagem
		function getPost_panel(){
			// realiza o select no banco de dados e seleciona as 6 ultimas postagens da categoria life & evolution 
			$getPost_panel = mysql_query("
				SELECT * 
				FROM postagens 
				WHERE post_categoria = 1 
				ORDER BY post_data DESC 
				LIMIT 0,6");
			
			while($l = mysql_fetch_array($getPost_panel)){
				$this->post_id    = $l["post_id"];
				$this->post_nome  = $l["post_nome"];
				$this->post_autor = $l["post_autor"];
				$this->post_data  = $l["post_data"];
				$dataFormat = date('M d,Y',strtotime($this->post_data));
				
				print "<div class='panel panel-body'>";
					print"<span class='pull-left text-muted text-uppercase text-strong'>News</span><br/>";
					print"<a href='postagem.php?id_post=".$this->post_id."'>";
					print"<h4>".$this->post_nome."</h4>";
					print"<small class='pull-left text-muted text-uppercase'>BY ".$this->post_autor."</small></a>";
					print"<small class='pull-right text-muted text-uppercase'>".$dataFormat."</small></a>";
				print"</div>";
			}
		}//fim function getPost_panel
		function getPost_panel2(){
			// realiza o select no banco de dados e seleciona as 6 mais visualizadas da categoria life & evolution 
			$getPost_panel2 = mysql_query("
				SELECT * 
				FROM postagens 
				WHERE post_categoria = 1 
				ORDER BY post_qtde_visualizacao DESC 
				LIMIT 0,6");
			
			while($l = mysql_fetch_array($getPost_panel2)){
				$this->post_id    = $l["post_id"];
				$this->post_nome  = $l["post_nome"];
				$this->post_autor = $l["post_autor"];
				$this->post_data  = $l["post_data"];
				$dataFormat = date('M d,Y',strtotime($this->post_data));
				
				print "<div class='panel panel-body'>";
					print"<span class='pull-left text-muted text-uppercase text-strong'>Top views</span><br/>";
					print"<a href='postagem.php?id_post=".$this->post_id."'>";
					print"<h4>".$this->post_nome."</h4>";
					print"<small class='pull-left text-muted text-uppercase'>BY ".$this->post_autor."</small></a>";
					print"<small class='pull-right text-muted text-uppercase'>".$dataFormat."</small></a>";
				print"</div>";
			}
		}//fim function getPost_panel2
		
		function getPostagens(){
			// realiza o select no banco de dados e seleciona as 10 ultimas postagens da categoria life & evolution 
			$getPostagens = mysql_query("
				SELECT * 
				FROM postagens post, categoria_post cat 
				WHERE post.post_categoria = 1 and
					  post.post_categoria = cat.categoria_id
				ORDER BY post.post_data DESC 
				LIMIT 0,10");
			
			while($l = mysql_fetch_array($getPostagens)){
				$this->post_id        = $l["post_id"];
				$this->categoria_nome = $l["categoria_nome"];
				$this->post_nome      = $l["post_nome"];
				$this->post_texto     = $l["post_texto"];
				$this->post_data      = $l["post_data"];
				$dataFormat = date('M d,Y',strtotime($this->post_data));
				
				print "<div class='col-lg-6 panel panel-post'>";
				print "<div class='col-lg-12'>";
					print"<h5 class='pull-left text-uppercase text-danger text-strong'><b>News</b></h5><br/>";
					print"<a href='postagem.php?id_post=".$this->post_id."'>";
					print"<img src='postagem_imagem.php?id_img=".$this->post_id."' class='img-responsive sr-icons' alt=''>";
					print"<h4>".$this->post_nome."</h4>";
					print"<small>";
					print substr($this->post_texto,0,116)."...";
					print"</small></a>";
					print"<small class='pull-left text-muted text-uppercase'>".$dataFormat."</small>";
					print"<small class='pull-right text-danger text-uppercase'> ".$this->categoria_nome."</small>";
				print"</div>";
				print"</div>";
			}
		}//fim function getPostagens
	}//fim class filter_categoria
?>