<?php
function selectViewersByMovie($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT v.viewer_id, viewer_name, viewer_description FROM 'viewer' v join movie m on m.viewer.id = v.viewerid where m.movie_id=?");
        $stmt->bind_param("i",$idd); // look again to see if it matches
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
