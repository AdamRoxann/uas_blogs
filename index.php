<?php 

	include 'conn.php'; 
	include 'conf.php';

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Welcome BRADAHHH</title>
 		<link rel="stylesheet" type="text/css" href="assets/css/css.css">
		<link rel="stylesheet" type="text/css" href="assets/css/transition.css"> 		
 		<link rel="shortcut icon" type="image/jpg" href="assets/icon/darkside.jpg">
 </head>
 <body>
 	<div class="top-gray"></div>
 	<div class="header">
 		<div class="big-logo">Roxann's Blog</div>
 		<?php include 'menu.php';?>
 	</div>
 	<div class="content">
 		<div class="container">
 			<?php 
 				if (!is_null(get('p'))) {
 				 	switch (get('p')) {
 				 		case 'blog':
 				 			inc('tampilan/crud/blog');
 				 			break;
 				 		case 'crud':
 				 			switch (get('m')) {
 				 				case 'home':
 				 					inc('tampilan/crud/all');
 				 					break;
 				 				case 'add':
 				 					inc('tampilan/crud/add');
 				 					break;
 				 				case 'edit':
 				 					inc('tampilan/crud/edit');
 				 					break;
 				 				
 				 				default:
 				 					inc('tampilan/crud/all');
 				 					break;
 				 			}
 				 			break;
 				 		
 				 		default:
 				 			inc('home');
 				 			break;
 				 	}
 				 } else{ inc('home'); } ?>
 		</div>
</div>
</body>
</html>