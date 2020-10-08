<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home (Hotal management)</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link href="img/logo.png" type="img/icon" rel="icon">
    </head>
    <body> 
        <div id="full">
            <div id="bg" style="background-image:url('img/bed.jpg'); height:1200px ">
            <div id="header">
                <div id="logo">
                    <h1><font color="white"> My Project</font></h1>   
                </div>
                <div id="nav">
                <ul id="a1">
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="rd.php">Room Details</a></li>
					<li><a href="#">Help</a></li>
				</ul>
                </div>
            </div>
            <br><br>
            <div id="banner">
                <center><div id="form1">
                    <form action="room.php" method="post">
                <table style="color: yellow;">
                    <tr>
					   <td>Room NO</td>
                        <td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No"></td>
				    </tr>
                    
                    <tr>
					   <td>Room Type</td>
                        <td><input type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>
				    </tr>
                    
				    <tr>
					   <td>Room Price</td>
                        <td><input type="text" name="price" placeholder="Enter Room Price" title="Enter Room Price"></td>
				    </tr>
                    
                    <tr>
                        <td><input style="width:120px; height:30px; border-radius: 20px; opacity: 0.5; float: right;" type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>
                </form>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $rm=$_POST['rno'];
                        $type=$_POST['type'];
                        $p=$_POST['price'];
                        if(mysqli_query($a,"insert into room(rno,type,price) values('$rm','$type','$p')"))
                        {
                            echo "data inserted";
                        }
                        else
                        {
                            echo "fieald";
                        }
                    }
                
                ?>
                    
            </div></center>
        </div>
        </div>
        </div>
    </body>
</html>