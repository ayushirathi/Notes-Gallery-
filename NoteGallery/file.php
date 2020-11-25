


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  />
    <style>
                * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }  
        body{
            /* background-color: darkgray; */
          
        }
        .H {
          width: 100%;
          height: 100%;
        }
      
        .h h1 {
          vertical-align: middle;
          text-align: justify;
          /* font-size: 10vh; */
          /* padding-top: 7vh; */
          display:inline;
          margin-left: 2vw;
        }
        .h{
          display:inline;
        }
        .h p {
          font-size: 3vh;
          line-height: 4vh;
          text-align: justify;
          margin-left: 2vw;

        }
        .header a{
            font-size: 8vh;
            color: black;
            font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
            text-shadow: 0 0 0.1em teal;
            display: inline-block;
            /* padding-left: 40vw; */
            }

        .contain{
            display: block;
            /* border: solid black 5px;  */
            height: auto;
            clear: both;
            padding-left:20%;
            }
    </style>
</head>
<body>
<div class="header" style="text-align:center">
      <a href="index.html"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Notes</a>
    </div>
    <p style="text-align:center";>Click on pdf to Download or view</p>
    <br>
</div> 
</body>
</html>

<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    // header("location: welcome.html");
    // exit;
}
require_once "config.php";
$sql = "SELECT filename,title,idea FROM addideas";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    echo '<div class="contain">';
    echo '<div class="H">';
    // echo "<iframe src='files/".$row['filename']."' width='120px' height='80px'></iframe>";
    // echo "<object data='files/".$row['filename']."' type='application/pdf' width='300' height='200'>";
    echo "<a href='files/".$row['filename']."'><img src='download.png' alt='pdf image' style='width:120px;height:120px;'></a>";
    // echo "</object>";
    echo '<div class="h">';
    echo "<h1>".$row["title"]."</h1>";
    echo "<p>". $row["idea"]."</p><br>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
 
  }

} else {
  echo "0 results";
}

?>