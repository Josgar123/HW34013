<?php
function selectMovies() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT movie_id, movie_name, theater_name FROM 'movie'");
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