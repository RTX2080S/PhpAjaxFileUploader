<?php

     $target_dir = "Data/";
     $name = $_POST['name'];
     print_r($_FILES);
     $target_file = $target_dir . basename($_FILES["file"]["name"]);

     move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
     
//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//     }
//
//     $sql = "INSERT INTO MyData (name,filename) VALUES ('".$name."','".basename($_FILES["file"]["name"])."')";
//
//     if ($conn->query($sql) === TRUE) {
//         echo json_encode($_FILES["file"]); // new file uploaded
//     } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     $conn->close();
?>
