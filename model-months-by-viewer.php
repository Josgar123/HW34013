<?php
function selectMonthsByViewer($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.movie_id, movie_name, runtime, v.viewer_id, viewer_name, viewer_description FROM movie m 
        join movieviewer mv on mv.movie_id=m.movie_id join viewer v on v.viewer_id=mv.viewer_id where m.movie_id=?");
        $stmt->bind_param("i",$cid); // look again to see if it matches
        $success=$stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
