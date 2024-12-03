<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('mis4013db1.mysql.database.azure.com', 'josuegarcia', 'B34in123$', 'movie');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
