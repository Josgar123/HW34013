<?php
function selectViewers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT viewer_id, viewer_name, viewer_description FROM viewer");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
