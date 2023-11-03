<?php

$id = $_POST['id'];

include 'connect.php';


$sql = "DELETE FROM produto WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>