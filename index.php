<!DOCTYPE html>
<html>

<head>
	<title>Control Panel</title>
	<link rel = "stylesheet" type = "text/css" href="CP.css">
</head>

<body>

     <?php
    // Create connection
    $conn = new mysqli("localhost","root","","control");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

        if(isset($_POST['butt1'])) {
          $sql = "INSERT INTO remote (id,forward,lefl,stop,rightr,backward)
          VALUES ('', 'F', '','', '','')";
					}

        if(isset($_POST['butt2'])) {
          $sql = "INSERT INTO remote (id,forward,lefl,stop,rightr,backward)
          VALUES ('', '', 'L','', '','')";
       }
        if(isset($_POST['butt3'])) {
          $sql = "INSERT INTO remote (id,forward,lefl,stop,rightr,backward)
          VALUES ('', '', '','S', '','')";
        }
        if(isset($_POST['butt4'])) {
          $sql = "INSERT INTO remote (id,forward,lefl,stop,rightr,backward)
          VALUES ('', '', '','', 'R','')";
        }
        if(isset($_POST['butt5'])) {
          $sql = "INSERT INTO remote (id,forward,lefl,stop,rightr,backward)
          VALUES ('', '', '','', '','B')";
        }


       if ($conn->query($sql) === TRUE) {
        //  echo "New record created successfully";
        } else {
          //echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>


<form  method="post"> <table border="0" width="100%"> <tbody>

 <tr><td>
 	<p class="t1"> Control Panel
    <br> <br> <small style="color:#A7D8FF;">Help robot go where he wants.</small></p>
</tr></td>

 <tr><td>
 	<img class="robImage" src="h1.png"/> <br><br><br><br>
    </td>


 <tr><td>


 	 <div class="tooltip">
     <button class="butt1" name="butt1" type="submit"  > <span class="tooltiptext">Forwards</span> <img class=image3 src= "top.png" /> </button>

     </div>


 </td></tr>


 <tr><td>

 	<div class="tooltip">

    <button name="butt2" class="butt2" type="submit"> <span class="tooltiptext">Left</span>  <img class=image3 src= "left.png" /> </button>

    </div>
 	<div class="tooltip">
    <button name="butt3" class="butt3" type="submit" > <span class="tooltiptext">Stop</span> <img class=image3 src= "stop.png" /> </button>
    </div>
 	<div class="tooltip">
    <button name="butt4" class="butt4" type="submit" > <span class="tooltiptext">Right</span> <img class=image3 src= "right.png" /> </button>
    </div>

 </td> </tr>



 <tr><td>
 	<div class="tooltip">
    <button  name="butt5" class="butt5" type="submit"> <span class="tooltiptext">Backwards</span> <img class=image3 src= "down.png" /> </button>
    </div>

 </td></tr>

 </tbody>

 </table> </form>




</body>

</html>
