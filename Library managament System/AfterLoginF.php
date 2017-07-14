<?php

require 'connect.inc.php';
     session_start();
     if($_SESSION['SUsername'] == NULL) {
       header("location: Login.html?msg=You need to login");
     }
     $SUser = $_SESSION['SUsername'];

     $result2 = mysql_query(" Select staff_mst.User_Name from staff_mst WHERE (User_id = '$SUser');");
     if ($result2 === FALSE) {
    die(mysql_error());
    }
    $SSUser = mysql_fetch_array($result2);

 ?>


 <html>
<head>
<style type="text/css">
html, body {height:100%; margin:0; padding:0;}

#page-background {position:fixed; top:0; left:0; width:100%; height:100%;}
#content {position:absolute; top:250px; left:475px;}
#contenta {position:absolute; top:174px; right:60px;}
#contentb {position:absolute; top:0px; left:350px;}
#contentc {position:absolute; top:56px; left:350px;}
#contentd {position:absolute; top:114px; left:350px;}
#contente {position:absolute; top:178px; left:350px;}
#contentf {position:absolute; top:238px; left:350px;}



.clear { /* generic container (i.e. div) for floating buttons */
    overflow: hidden;
    width: 100%;
}

/* OVAL BUTTON CODES: */
a.button {
    background: transparent url('bg_button_a.gif') no-repeat scroll top right;
    color: #444;
    display: block;
    float: left;
    font: normal 12px arial, sans-serif;
    height: 24px;
    margin-right: 0px;
    padding-right: 18px; /* sliding doors padding */
    text-decoration: none;
    border-radius: 20px ;

}

a.button span {
    background: transparent url('bg_button_span.gif') no-repeat;
    display: block;
    line-height: 14px;
    padding: 5px 0 5px 18px;
    border-top-left-radius: 20px ;
    border-bottom-left-radius: 20px ;
}
a.button:active {
    background-position: bottom right;
    color: #000;
    outline: none; /* hide dotted outline in Firefox */
}

a.button:active span {
    background-position: bottom left;
    padding: 6px 0 4px 18px; /* push text down 1px */
}
/* HEADERS AND BACKGROUNDS */

h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 0px;
	padding-left: 0px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}

/* ~~ this container surrounds all other divs giving them their percentage-based width ~~ */
.container {
	width: 100%;
        max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */
	min-width: 780px; /* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background-color: #6F7D94;

}

.content {
	padding: 0px 0;
	width: 80%;
	height : 30%
	float: right;
	background-image: url(home.jpg);
}

/* CODE FOR BREADCRUMBS */
.breadcrumb{
font: bold 14px "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
}

.breadcrumb a{
background: transparent url(m/breadcrumb.gif) no-repeat center right;
text-decoration: none;
padding-right: 18px; /*adjust bullet image padding*/
color: navy;
}

.breadcrumb a:visited, .breadcrumb a:active{
color: navy;
}

.breadcrumb a:hover{
text-decoration: underline;
}



#menu {
position:relative;
margin-left: 100px;
background-color: ;
color: black;
text-decoration: none;
}
#menu ul {
display: none;
}
#menu:hover {
border: none;
}
#menu:hover ul {
background-color: RoyalBlue;
display: block;
margin: 0;
margin-left: 40px;
padding: 0;
list-style-type: none;
}
body {
margin-right: 0px;
}




</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="container">
  <div class="header"><a href="#"><img src="LibraryH.jpg" alt="Insert Logo Here" align="middle" name="Insert_logo" width="1258" height="174" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a>
 </div>
 <body bgcolor="RoyalBlue">

 <p class="breadcrumb"><a href="AfterLoginF.php">HOME</a>


<div id="content">
<p>To Issue A Book:
<div id="contentb">
   <a class="button" href="CreateBorrower.php"><span>Issue</span></a>
</div>
<br>
    To Return A Book:
    <div id="contentc">
   <a class="button" href="BookReturn.php"><span>Return</span></a>
</div>
<br>
<br>
<br>
Books Borrowed By a Specific Borrower ID:
<div id="contentd">
   <a class="button" href="borrower_id.php"><span>BorrowerID</span></a>
</div>
<br>
<br>
<br>
Books Borrowed According to ISBN :
<div id="contente">
   <a class="button" href="ByISBN.php"><span>ISBN</span></a>
</div>
<br>
<br>
<br>
Get Student Details:
<div id="contentf">
   <a class="button" href="StudentDetails.php"><span>Details</span></a>
</div>
<br><br><br></p>


 </div>
 <div id="contenta">
  <div>
<a href="#" id="menu">Option
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td>
<ul>
<li><a href="">Change Password</a></li>
<li><a href="logout.php">LogOut</a></li>
</ul>
</td>
</tr>
</table>
</a>
</div>

 </div>
 </body>
</html>