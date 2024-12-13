<?php
function selectDirectors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT director_id, director_name, director_age, movies_made FROM director");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertDirector($dName, $dAge, $dMovies) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into director (director_name, director_age, movies_made) values (?,?,?)");
        $stmt->bind_param("sis", $dName, $dAge, $dMovies);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateDirector($dName, $dAge, $dMovies, $did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update director set director_name=?, director_age=?, movies_made=? where movie_id=?");
        $stmt->bind_param("sisi", $dName, $dAge, $dMovies);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteDirector($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from director where director_id=?");
        $stmt->bind_param("i", $did);
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
