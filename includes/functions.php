<?php
function getAllPatients($conn) {
    $sql = "SELECT * FROM patients";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getPatientById($conn, $id) {
    $sql = "SELECT * FROM patients WHERE id = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function createPatient($conn, $data) {
    $sql = "INSERT INTO patients (name, age, address, doctor, deparment) VALUES ('".$data['name']."', '".$data['age']."', '".$data['address']."', '".$data['doctor']."', '".$data['department']."')";
    return $conn->query($sql);
}

function updatePatient($conn, $id, $data) {
    $sql = "UPDATE patients SET name='".$data['name']."', age='".$data['age']."', address='".$data['address']."' WHERE id=$id";
    return $conn->query($sql);
}

function deletePatient($conn, $id) {
    $sql = "DELETE FROM patients WHERE id=$id";
    return $conn->query($sql);
}


?>
