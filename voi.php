<?php
      $text = $_POST['text'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "voicee";

    $conn = new mysqli ($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
   // $text = $_POST['text'];
    

    $sql = "INSERT INTO speech ('text') VALUES ('$text')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: voicee.html")
    ?>
