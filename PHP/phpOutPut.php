<!DOCTYPE html>
<html>
<body>

<?php

	#this is one-line comment
	//this is also one-line comment
	/*

	this is multiple comments
	in html we cannot use this 
	we need the tag pattern like <!--  and  -->
	
	*/

$txt_variable = "helloworld";

echo "i love $txt_variable  !";

echo "i love" . $txt_variable . "!";

?>

<!--

	for php files we must use .php instead of .html
	in html we could include <style> or <script> in head or body
	but in php we must use php
	
	
	PHP files can contain text, HTML, CSS, JavaScript, and PHP code
	PHP code are executed on the server, and the result is returned to the browser as 
	plain HTML -> this is just one option
	
	PHP files have extension ".php"
	
	With PHP you are not limited to output HTML. You can output images, PDF files, and even 		Flash movies. You can also output any text, such as XHTML and XML.
	
	
-->
</body>
</html>
