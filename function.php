<?php

require "db_connection.php";
function getcats()
{
 global $con;
 $getcatquery = "select * from categories ";
 $result = mysqli_query($con, $getcatquery);
 
 while($row = mysqli_fetch_assoc($result))
 {
 $title = $row['cat_text'];
 $id = $row['cat_id'];
 echo "<li><a class="nav-link" href='#'>title</a></li>";
 }
 }
 ?>