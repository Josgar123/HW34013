<?php
function selectMonthsByViewer($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT v.viewer_id, viewer_name, viewer_description FROM viewer v join movie m on m.viewer_id = v.viewer_id where m.viewer_id=1");
        $stmt->bind_param("i",$cid); // look again to see if it matches
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
