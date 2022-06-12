<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title[$page]; ?></title>
	<?php if(isset($meta_descr[$page])) { ?>
	<meta name="description" content="<?php echo $meta_descr[$page]; ?>">
	<?php } ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" integrity="sha512-thoh2veB35ojlAhyYZC0eaztTAUhxLvSZlWrNtlV01njqs/UdY3421Jg7lX0Gq9SRdGVQeL8xeBp9x1IPyL1wQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo URI; ?>/styles.css">
  </head>
  <body>
	  <header class="p-3 bg-dark text-white">
		<div class="container">
		  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
			  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
			</a>

			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
			  <li><a href="<?php echo URI; ?>" class="nav-link px-2 text-<?php if($page=="home") echo "secondary"; else echo "white"; ?>">Home</a></li>
			  <li><a href="<?php echo URI; ?>?page=about" class="nav-link px-2 text-<?php if($page=="about") echo "secondary"; else echo "white"; ?>">About</a></li>
			  <li><a href="<?php echo URI; ?>?page=contact" class="nav-link px-2 text-<?php if($page=="contact") echo "secondary"; else echo "white"; ?>">Contact</a></li>
			</ul>

			<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
			  <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
			</form>

			<div class="text-end">
			  <button type="button" class="btn btn-outline-light me-2">Login</button>
			  <button type="button" class="btn btn-warning">Sign-up</button>
			</div>
		  </div>
		</div>
	  </header>
<div class="d-flex flex-column h-100">