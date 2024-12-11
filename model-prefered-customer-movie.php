<?php
function selectMovies() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.movie_id, movie_name, runtime, year, genre, v.viewer_id, viewer_name, viewer_description FROM movie m 
        join movieviewer mv on mv.movie_id=m.movie_id join viewer v on v.viewer_id=mv.viewer_id");
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
