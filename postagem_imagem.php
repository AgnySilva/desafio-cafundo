<?php
		$host = "localhost";
	    $username = "root";
		$password = "usbw";
		$db = "desafio_cafundo";
		
		$id_img = $_GET["id_img"];
		mysql_connect($host,$username,$password) or die(mysql_error()); 
		@mysql_select_db($db) or die(mysql_error());
		$result=mysql_query("SELECT * FROM postagens WHERE post_id = $id_img") or die(mysql_error());
	
		while($row=mysql_fetch_object($result)) {
			Header( "Content-type: image/gif"); 
			print $row->post_img;
		}
?>
