<?php
function selectViewersByMovie() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT v.viewer_id, viewer_name, viewer_description, day_time, month, year FROM 'viewer' v join section s on s.viewer.id = v.viewerid where s.movie_id=?");
        $stmt->bind_param("i",$iid); // look again to see if it matches
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