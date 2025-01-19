<?php
    header('Content-Type: application/json; charset=utf-8');
    $conn = new mysqli("sql108.infinityfree.com", "if0_37325339", "fKRtEM4HlGwe", "if0_37325339_user_table");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    $sql = "SELECT * FROM users";
    $query = $conn->query($sql);
    $result = $query->fetch_all(MYSQLI_ASSOC);
    echo json_encode($result);


?>
