<?php
function selectViewers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT viewers_id, viewers_name, viewers_description FROM 'viewer'");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertViewer($vName, $vDesc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO 'viewer' ('viewer_name', 'viewer_description') VALUES (?,?)");
        $stmt->bind_param("ss", $vName, $vDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateViewer($vName, $vDesc, $vid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE 'viewer' set 'viewer_name'=?, 'viewer_description'=? where course_id=?");
        $stmt->bind_param("ssi", $vName, $vDesc, $vid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteViewer($vid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Delete from course where course_id = ?");
        $stmt->bind_param("i", $vid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
