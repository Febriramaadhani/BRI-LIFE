<?php 

include 'koneksi.php';

$idkontrasepsi=$_GET['idkontra'];

// sql to delete a record
$sql = "DELETE FROM list_kontrasepsi WHERE Id_Kontrasepsi='$idkontrasepsi'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
         header('Location: kontrasepsi.php');

} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>