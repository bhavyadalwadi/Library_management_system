                                                 <?php
require 'connect.inc.php';
session_start();
     if($_SESSION['SUsername'] == NULL) {
       header("location: Login.html?msg=You need to login");
     }

if(isset($_GET['SID']) && isset($_GET['SAD'])) {
$SID = $_GET['SID'];
$SAD = $_GET['SAD'];

 if (!empty($SID) && !empty($SAD)) {
$result = mysql_query("call BookReturn('$SID','$SAD')");
    if ($result === FALSE) {
    die(mysql_error());
    }
     header("location: Cupdated.php");
 } else {
    echo 'Please enter the values';
  }
}
?>

<html>
<head>
<style type="text/css">
html, body {height:100%; margin:0; padding:0;}

#page-background {position:fixed; top:0; left:0; width:100%; height:100%;}

#content {position:absolute; top:200px; left:575px;}
#contenta {position:absolute; top:0px; right:0px;}
/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 0px;
	padding-left: 0px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
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

.sidebar1 {
	float: right;
	width: 20%;
	background-color: #93A5C4;
	padding-bottom: 8px;
}
.content {
	padding: 0px 0;
	width: 80%;
	height : 30%
	float: right;
	background-image: url(home.jpg);
}

ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
	color: #000000;
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	text-decoration: none;
	background-color: #8090AB;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #6F7D94;
	color: #FFF;
}

/* ~~ The footer ~~ */
.footer {
	padding: 0px 0;
	background-color: #6F7D94;
	position: absolute;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
}

body,td,th {
	color: Black;
}
-->
.breadcrumb{
font: bold 14px "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
}

.breadcrumb a{
background: transparent url(breadcrumb.gif) no-repeat center right;
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
</style>
</head>
<body>
<div class="container">
  <div class="header"><a href="#"><img src="LibraryH.jpg" alt="Insert Logo Here" align="middle" name="Insert_logo" width="1258" height="174" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a>
<body bgcolor="RoyalBlue">
<p class="breadcrumb"><a href="AfterLoginF.php">HOME</a> Return</p>
<div id="content">
<p><form action="BookReturn.php" method="GET">
       Enter the Borrower ID:
       <br><input type="text" name="SID"><br>
       Enter the Book ID:
       <br><input type="text" name="SAD"><br>
       <br>
       <input type="submit" value="Enter">
 </form></p>
 </div>
 <div id="contenta">
 <p><a href="logout.php"><button>Logout</button>
</a>

 </p>  </div>
</body>
</html>