<?php
include "connection.php";

if(isset($_POST['btnPost'])){
    $name = $_POST['fname'];
    $surname = $_POST['lname'];
    $sal = $_POST['salary'];
    
    try{
        
    $sql = "INSERT INTO employee (first_name, last_name, salary)
            VALUES ('$name', '$surname', '$sal')";
    $sth = $conn->query($sql);
            echo "<script>alert('Successfully added a new employee');
        window.location.href = 'index.html'
        </script>";
    } 
    catch(PDOException $e) {
                echo "<script>alert('Not Sucessful' + $e->getMessage);
        window.location.href = 'index.html'
        </script>";
    }
}
?>