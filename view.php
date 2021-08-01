<html>
    <head>
        <title>View Details</title>
</head>
<body>
    <table>
        <tr>
            <th>Id </th>
            <th> User_Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone_No</th>
</tr>
<?php 
$conn=mysqli_connect("localhost","root","","api");
if($conn-> connect_error)
{
    die("Connection faild:".$conn-> connect_error);
}
$sql="SELECT id,User_Name,Email,Age,Phone_No from register";
$result=mysqli_query($conn->$sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    { 
        echo "<tr><td>".$row["id"]."</td><td>".$row["Email"]."</td><td>".$row["Age"]."</td><td>".$row["Phone_No"]."</td><td>".$row["User_Name"]."</td></tr>";
    }
}
else{
    echo "0 result";
}
mysqli_close($conn);
?>
</table>
</body>
</html>