<?php
$server="localhost";
$username="root";
$password="";
$database="user";
$connection= mysqli_connect("$server","$username","$password");
$selectdb= mysqli_select_db($connection,$database);
if(!$selectdb)
{
    echo("connection terminated");
}
?>

<html>
<style>
table{
    font-family:arial;
    border-collapse:collapse;
    width:100%
}
td,th{
    border:1px solid;
    text-align:left;
    padding:8px;
}
</style>
<body>
<table>
    <tr>
        <th> Username </th>
        <th> Password </th>
    </tr>
<?php
    $query= mysqli_query($connection,"select * from login");
    while($row= mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td><b> <?php echo $row['myusername']; ?> </b></td>
            <td> <b> <?php echo $row['mypass']; ?></b> </td>
            
        </tr>  
<?php    }
?>
</table>
</body>
</html>