<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" name="productform" id="productform" >
	<p>
		<label for='prodid'>Product ID: (maxlength 10)</label><br>
		<input type="text" name="prodid" >
	</p>
	<p>
		<label for='email'>Email: (minlength 10)</label><br>
		<input type="text" name="email" >
	</p>
    <p>
		<label for='address'>Address( length between 10 and 250)</label><br>
		<input type="text" name="address">
	</p>    
	<p>
		<label for='message'>Message:( length between 50 and 1050)</label> <br>
		<textarea name="message"></textarea>
	</p>
	   
	<input type="submit" name='submit' value="Post it !">
</form>
</body>
</html>