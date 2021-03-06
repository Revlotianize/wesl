<?php

	session_start();
	include("wesl.core.functions.php");
	if(!isset($_SESSION['user_email'])){
		header("location:index.php");
	}
	else {

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $lang['PAGE_TITLE_TEAMS']; ?></title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
		<link rel="stylesheet" type="text/css" href="styles/ui.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
<body>
	<nav>
		<ul>
		<?php showMenu(); ?>
		</ul>
	</nav>
	<header>
		<?php include("template/searchusers.html"); ?>
		<h3>World <font color="darkorange">e</font>Sports League Network</h3>
	</header>
	<main>
		<aside>
			<ul>
			<?php userDetails(); ?>
			</ul>
		</aside>
		<section>
			<article>
				<h3><?php echo $lang['TEAMS_CONTENT_TITLE']; ?></h3>
				<hr />
				<?php getTeams(); ?>
			</article>
		</section>
		<?php include("template/footer.html"); ?>
	</main>
</body>
</html>
<?php } ?>
