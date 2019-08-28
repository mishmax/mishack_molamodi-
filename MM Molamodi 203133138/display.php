<style>
table, th, td{
    border: 1px solid black;
}
    
</style>

<?php
include "connection.php";

$sql = "SELECT employee_id, first_name, last_name, salary FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    echo " <table style = 'width:100%'><tr><th>ID</th><th>Name</th><th>Surname</th><th>Salary</th></tr>";
    while($row = $result->fetch_assoc()) {
        
        echo '<tr><td>'.$row["employee_id"]. '</td><td>' . $row["first_name"]. '</td><td>' . $row["last_name"]. '</td><td>' . $row["salary"] .'</td></tr>';
        
    }
    echo "</table>";
    
    
} else {
    echo "0 results";
}
$conn->close();

?>

