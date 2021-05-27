<?php
    echo "You are in page 2";
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "userform";
    $conn = mysqli_connect($host,$username,$password,$db);
    echo "$id";

    $id = $_GET['Id'];
    echo "$id";
?>


if(isset($_POST["submit2"]))
{
   $res=mysql_query("select * from table1");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysql_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'" height="200" width="200"/>';
   echo "<br>";
   ?><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php
   echo "</td>";
   
   }
   echo "</tr>";
   
   echo "</table>";
  

}

?>