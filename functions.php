<?php

	function redirect($page = HOME) {
		if($page==HOME) {
			header("Location: ".URI);
		} else {
			header("Location: ".URI."?page=$page");
		}
		die();
	}
