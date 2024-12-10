<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'josuegar_user', 'vBPpJ8?4GmZC', 'josuegar_db');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
