<?php
require_once '1.php';
$conn = new mysqli($servername,$username, $password, $database);
if($conn->connect_error) die($conn->connect_error);

$query = 'SELECT * FROM student';
$result = $conn->query($query);
if(!$result) die($conn->error);

$row = $result->num_rows;

for($j = 0; $j < $row; ++$j) {

    $result->data_seek($j);
    echo 'ID: ' . $result->fetch_assoc()['id'] . '<br>';
    $result->data_seek($j);
    echo 'Name: ' . $result->fetch_assoc()['name'] . '<br>';
    $result->data_seek($j);
    echo 'Age: ' . $result->fetch_assoc()['age'] . '<br>';
    $result->data_seek($j);
    echo 'Address: ' . $result->fetch_assoc()['address'] . '<br>';
    $result->data_seek($j);
    echo 'Telephone: ' . $result->fetch_assoc()['telephone'] . '<br>';
}

$result->close();
$conn->close();
?>
