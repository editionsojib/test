<?php
    header('Content-Type: application/json; charset=utf-8');
    $conn = new mysqli("sql108.infinityfree.com", "if0_37325339", "fKRtEM4HlGwe", "if0_37325339_user_table");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        //echo "Connected successfully";
    }

    $users = array();
    $sql = "SELECT * FROM users";
    $query = $conn->query($sql);
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $users[] = $row;
        }
    }
    echo json_encode($users);
?>
