<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('', '', '', '');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
