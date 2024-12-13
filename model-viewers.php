<?php
function selectViewers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT viewer_id, viewer_name, viewer_description FROM viewer");
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
        $stmt = $conn->prepare("insert into viewer (viewer_name, viewer_description) values (?,?)");
        $stmt->bind_param("ss", $vName, $vDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

}function updateViewer($vName, $vDesc, $vid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update viewer set viewer_name=?, viewer_description=? where viewer_id=?");
        $stmt->bind_param("ssi", $vName, $vDesc);
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
        $stmt = $conn->prepare("delete from viewer where viewer_id=?");
        $stmt->bind_param("i", $vid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
?>
