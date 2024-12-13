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
function insertMovie($mid, $vid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into movieviewer (movie_id, viewer_id) values (?,?)");
        $stmt->bind_param("ii", $mid, $vid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateMovie() {
    try {
        $conn = get_db_connection($mid, $vid, $mmid);
        $stmt = $conn->prepare("update movieviewer set movie_id=?, viewer_id=? where movieviewer_id=?");
        $stmt->bind_param("iii", $mid, $vid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteMovie($mmid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from movieviewer where movieviewer_id=?");
        $stmt->bind_param("i", $mmid);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
