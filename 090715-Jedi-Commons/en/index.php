<?php session_start(); ?><html>
<head>
<title>Jedi Commons</title>
</head>
<body>
<?php include("../../scripts/php/spc/counter.php");
$spc = new spc();
$spc->email = 'mail@perguth.de';
$spc->email_nach_tagen = 14;
$spc->dateipfad_zur_txt = 'spc/';
$spc->start();
 ?>
 
<div align="center">
<h1>Jedi Commons - <a href="../">deutsch</a></h1>
<i>May the force be with you...</i>


<ul style="width:100px;">
	<li><a href="by/index.php?v=&c=">by</a></li>
	<li><a href="by-sa/index.php?v=&c=">by-sa</a></li>
	<li><a href="by-nc/index.php?v=&c=">by-nc</a></li>
	<li><a href="by-nd/index.php?v=&c=">by-nd</a></li>
	<li><a href="by-nc-sa/index.php?v=&c=">by-nc-sa</a></li>
	<li><a href="by-nc-nd/index.php?v=&c=">by-nc-nd</a></li>

</ul>

<b>Note:</b> You have to add your <a href="http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements">country code</a> and the version of the license at the end of the URL like in this example:<br /><code>http://iodron.de/jc/by-nc-sa/index.php<font color="red">?v=3.0&c=us</font></code><br /><a href="http://creativecommons.org/international">Here</a> you can find out which is the newest version available for your country.
<br /><br />
<img alt="Jedi Commons License" style="border-width:0" src="http://blogage.de/files/6273/image?jedicommons.png" /><br />
<div style="width:250px;"><code>&lt;a rel="license" href="http://d3v.at/jc/<font color="red">YourLicense</font>/index.php?v=<font color="red">Version</font>&c=<font color="red">Country</font>">&lt;img alt="Jedi Commons License" style="border-width:0" src="http://blogage.de/files/6273/image?jedicommons.png" />&lt;/a></code></div>

<br />
***<br />
<small><a href="https://d3v.at/">d3v.at/</a></small>
</div>
</body>
</html>
