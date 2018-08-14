<?php 
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "testing");
 $query = "SELECT * FROM pages WHERE page_id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 $output = '';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <h1>'.$row["page_title"].'</h1>
  <p>'.$row["page_description"].'</p>
  ';
 }
 echo $output;
}


?>
