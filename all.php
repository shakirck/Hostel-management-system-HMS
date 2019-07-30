<?php

$con = mysqli_connect("localhost","root","ckmanzil");
     if(!$con){
           die("Database Connection failed".mysql_error());
}else{
$db_select = mysqli_select_db("login_register_script", $con);
     if(!$db_select){
           die("Database selection failed".mysql_error());
}else{ 

   } 
}

$records = mysqli_query("SELECT * FROM users");

 

?>

<!-- This piece of PHP code defines the structure of the html table -->

 

<!DOCTYPE html>
<html>
    <head>
        <title> Fetching data </title>
    </head>

    <body>

        <table width="400" cellpadding="2" cellspacing='1'>

           <tr >
                     <th> id</th>
                     <th>Full Name</th>
                     <th>Year Of Study</th>
           </tr>

<!-- We use while loop to fetch data and display rows of date on html table -->

<?php

     while ($data = mysqli_fetch_assoc($records)){

           echo "<tr>";
               echo "<td>".$data['id']."</td>";
               echo "<td>".$data['fullname']."</td>";
               echo "<td>".$data['yos']."</td>";
           echo "</tr>";

     }
?>
        </table>

   </body>

</html>