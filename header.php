<html>
<head>
<title>User details</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
    .right
    {
    	float:right;
    }
    #hlink:hover
    {
    	text-decoration: none;
    	color:green;
    }
    </style>
</head>
<body>

<table class="table table-hover" style="background-color:#e6e6ff;">
 			<tr>
 			<td><font face="Monotype Corsiva" size="20px"><a href="userdetails.php" id="hlink">My Travel</a></font></td>
            <td valign="bottom"><br><a href="viewbookings.php">My Bookings</a></td>
 			<td valign="bottom"><br><a href="bookings.php">Favourites</a></td>
 			<td valign="bottom"><br><a href="category.php">Travel Packages</a></td>
 			<td valign="bottom"><br><a href="about.php">About</a></td>
 			<td valign="bottom"><br><a href="#">Contact Us</a></td>
 			
 			<td align="right" valign="bottom"><br><h4><img width="30px" height="30px" src="images/user.png">Welcome <font color="green"><b><?php echo $_SESSION['name'] ?></b> </font>( <a href="logout.php" >logout</a> )&nbsp&nbsp&nbsp&nbsp</h4></td>
 			</tr>
 			</table>

</body>
</html>