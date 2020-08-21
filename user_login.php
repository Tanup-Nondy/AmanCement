<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>User Login</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css" media="screen" >
	<style type="text/css">
body {
    background-image:url("images/bg.jpg");
}
</style>
</head>
<body>
<div class="container">
	<section id="content">
		<form action="user_loginAction.php" method="post">
			<h1>User Login</h1>
			<div>
				<input type="text" placeholder="Email"  name="email">
			</div>
			<div>
				<input type="password" placeholder="Password" name="password">
			</div>
			<div>
				<input type="submit" value="Log in">
			</div>
		</form><!-- form -->
		<!--<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>