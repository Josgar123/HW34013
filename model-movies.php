<?php
function selectMovies() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT movie_id, movie_name, runtime, year, genre FROM movie");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertMovie($mName, $mRuntime, $mYear, $mGenre) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("insert into movie (movie_name, runtime, year, genre) values (?,?,?,?)");
        $stmt->bind_param("ssis", $mName, $mRuntime, $mYear, $mGenre);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateMovie($mName, $mRuntime, $mYear, $mGenre, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update movie set movie_name=?, runtime=?, year=?, genre=? where movie_id=?");
        $stmt->bind_param("ssisi", $mName, $mRuntime, $mYear, $mGenre, $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteMovie($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from movie where movie_id=?");
        $stmt->bind_param("i",$mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectViewersByMovie() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT v.viewer_id, viewer_name, viewer_description FROM 'viewer' v join movie m on m.viewer.id = v.viewerid where m.movie_id=?");
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
