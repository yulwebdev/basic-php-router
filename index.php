<?php
	
	// config
	include "config.php";
	
	// functions
	include "functions.php";
	
	// page router
	if(isset($_GET["page"])) {
		
		if(in_array($_GET["page"], PAGES)) {
			$page = $_GET["page"];
		} else {
			redirect("404");
		}
		
	} else {
		$page = HOME;
	}
	
	if($page=="404") {
		header("HTTP/1.0 404 Not Found");
	}
	
	// titles, meta descriptions
	include "meta.php";
	
	// page rendering
	include "templates/header.php";
	include "pages/$page.php";
	include "templates/footer.php";

?>