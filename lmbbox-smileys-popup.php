<?php
/*
LMB^Box Smileys -> Was WP Smileys
by Thomas Montague
http://aboutme.lmbbox.com/lmbbox-plugins/lmbbox-smileys/
A Clickable Smilies hack for WordPress. Add, edit, remove, and manage the display of your smileys!
Version 3.2, 2005-10-25
*/

// LMB^Box Smileys Popup Display Page
// call {root}/config.php
// neat little test to find the wp-config.php file in the root directory
// from Owen Winkler's Exhibit http://www.asymptomatic.net/wp-hacks/
$config_file = 'wp-config.php';
$c = 0;
while(!is_file($config_file)) {
	$config_file = '../' . $config_file;
	$c++;
	if($c == 15) { exit('Could not find wp-config.php!'); }
}
require_once($config_file);


// Start Page with Smiley JS
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LMB^Box Smileys 3.2 for WordPress</title>
<style type="text/css">
/* Body style for Smileys Page */
body {
	margin: 10px 10px;
	padding: 0;
	background: #F2F2F2;
	color: #000000;
}
body, td {
	font: 10pt Georgia, "Times New Roman", Times, serif;
}
/* Main Div for Smileys Page */
div.lmbbox_smileys {
	/* your style; */
}
/* Link Styles for Smileys Page */
div.lmbbox_smileys a {
	color: #00019B;
	text-decoration: none;
}
div.lmbbox_smileys a:visited {
	color: #006;
}
div.lmbbox_smileys a:hover {
	text-decoration: underline;
	color: #069;
}
/* <h1> style -> used for Main Page Heading */
div.lmbbox_smileys h1 {
	margin: 10px 0px;
	font: normal 22px serif;
	color: #333333;
}
/* <h2> style -> used for Smileys Heading */
div.lmbbox_smileys h2 {
	margin: 10px 0px;
	border-bottom: 2px solid #69C;
	font: normal 20px serif;
	color: #333333;
}
/* Main Span for Smileys Output */
div.lmbbox_smileys span.lmbbox_smileys_span {
	/* your style; */
}
/* And anything in the span */
div.lmbbox_smileys span.lmbbox_smileys_span img {
	/* your style; */
}
</style>
</head>
<body>
<?php if (function_exists('lmbbox_smileys_display')) { lmbbox_smileys_display(); } ?>
</body>
</html>
