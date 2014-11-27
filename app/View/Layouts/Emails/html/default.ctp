<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts.Email.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Email Template</title>

<style>
*{
	margin: 0;
	padding: 0;
	font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	font-size: 100%;
	line-height: 1.6;
}
img {
	max-width:100%;
}
body {
	-webkit-font-smoothing: antialiased;
	-webkit-text-size-adjust: none;
	width: 100%!important;
	height: 100%;
}
a {
	color: #348eda;
}
.last {
	margin-bottom: 0;
}
.first {
	margin-top: 0;
}
.padding {
	padding: 10px 0;
}
table.body-wrap {
	width: 100%;
	padding: 20px;
}
table.body-wrap .container {
	border: 1px solid #f0f0f0;
}
table.footer-wrap {
	width: 100%;	
	clear: both!important;
}
.footer-wrap .container p {
	font-size: 12px;
	color: #666;
}
table.footer-wrap a {
	color: #999;
}
h1, h2, h3 {
	font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	line-height: 1.1;
	margin-bottom: 15px;
	color: #000;
	margin: 40px 0 10px;
	line-height: 1.2;
	font-weight: 200;
}
h1 {
	font-size: 36px;
}
h2 {
	font-size: 28px;
}
h3 {
	font-size: 22px;
}
p, ul, ol {
	margin-bottom: 10px;
	font-weight: normal;
	font-size: 14px;
}
ul li, ol li {
	margin-left: 5px;
	list-style-position: inside;
}
.container {
	display: block!important;
	max-width: 600px!important;
	margin: 0 auto!important;
	clear: both!important;
}
.body-wrap .container {
	padding: 20px;
}
.content {
	max-width: 600px;
	margin: 0 auto;
	display: block;
}
.content table {
	width: 100%;
}
.shadow{
	box-shadow:0 1px 2px rgba(0,0,0,0.15);
	-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.15);
	-moz-box-shadow:0 1px 2px rgba(0,0,0,0.15);
	-o-box-shadow:0 1px 2px rgba(0,0,0,0.15);
	-ms-box-shadow:0 1px 2px rgba(0,0,0,0.15);
}
h3,
p{
	font-size:16px;
	line-height:18px;
	color:#666666;
}
h3{
	text-transform:uppercase;
	color:#fe4819;
}
</style>

</head>
<body bgcolor="#ffffff">

<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container shadow" bgcolor="#FFFFFF">
				<?php echo $this->fetch('content'); ?>
		<td></td>
	</tr>
</table>
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">
			<div class="content">
				<table>
					<tr>
						<td align="center">
							<p>&copy; 2014 Flumenfest</p>
						</td>
					</tr>
				</table>
			</div>
		</td>
		<td></td>
	</tr>
</table>

</body>
</html>

