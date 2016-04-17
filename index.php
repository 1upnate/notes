<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<center>

<p>Your IP is: <?php include 'ip.php';?>

<br><br>

<p>Add a new note:
<form action = 'insert.php' method = 'post'>
    Subject: <input type = 'text' name = 'subject'><br>
    Information: <input type = 'textarea' name = 'info'><br>
    <input type  = 'submit'>
</form>

<p>Search for a note:
<form action = 'search.php' method = 'get'>
	subject: <input type = 'text' name = 'subject_search'><br>
	extract: <input type = 'textarea' name = 'extract_search'><br>
	<input type = 'submit'>

<br><br><br>
<p>Recent Notes:
<br>
=============================================================================================================================
<br>
<?php include 'fetch.php'; ?>
</center>

</body>

</html>
