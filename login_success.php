<?
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
// Check if session is not registered , redirect back to main page.
// Put this code in first line of web page.
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<HTML>
 <HEAD>
  <TITLE>UC is a new initiative to channel investments to Education, Health and Energy & Environmental services sectors</TITLE>
  <meta http-equiv="content-type" content="text/ html;charset=utf-8">
  <META NAME="Description" CONTENT="UC is a new initiative to channel investments to Education, Health and Energy&Environmental services sectors, in order to improve access to these services especially for the poor. These sectors need a much larger infusion of capital of various kinds including Financial, Intellectual and Social Capital.">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  </HEAD>
 <BODY>

<!--wrapper-->
<div id="wrapper">

<div id="header"><!--header-->
<img src="uc-logo.jpg" />
</div><!--#header-->

<!--navbar-->
<?php include 'navbar.php' ;?>
<!--#navbar-->

<!--maincontentarea-->
<div id="content-main">


<a href="logout.php">"Logout"</a>
<br>
Login Successful
<br>
<h1>Donate Books Forms</h1>
<ol>
<li><a href="donorregform.php">Donor Registration Form</a></li>
<li><a href="uc_donor.html.php">Book Donation Form</li>
<li><a href="book_receiverform.php">Book Distribution Form</li>
</ol>

<!--#maincontentarea-->

<!--footer-->
<? include 'footer.php' ; ?>
<!--#footer-->

 </div>
 <!--#wrapper-->

 </BODY>
</HTML>