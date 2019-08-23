<!DOCTYPE html>
<html>
<head>
	<title>Form Data Process</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Form Data Process With PHP</h1>
		<h3>By David Guimaraes, Computer Engineer</h3>
		<p>This is a little project done in order to actually start doing things with the PHP
			programming language. This is a very basic app. All it does is: it gathers the data
			from an HTML form and stores the data into variables for further processing.</p>
	</header>
	<main>
		<br><br>
		<form action="process.php" method="POST">
			<label>First Name: </label> <input name="firstName" type="text"><br>
			<label>Last Name: </label> <input name="lastName" type="text"><br>
			<label>Email Adress: </label> <input name="email" type="text"><br>
			<br><br>
			<textarea name="message" rows=10 cols=30>Type something in here...</textarea>
			<br><br>
			<input type="submit">
		</form>
	</main>
	<footer></footer>
</body>
</html>