<?php
	function conectar(){
		$link = mysqli_connect("localhost","root","");
		mysqli_select_db($link, "portal_denuncias");
		return $link;
		}
?>