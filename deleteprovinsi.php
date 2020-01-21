<?php 

include 'koneksi.php';

$idprov=$_GET['idprov'];

// sql to delete a record
$sql = "DELETE FROM list_provinsi WHERE Id_Propinsi='$idprov'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
         header('Location: provinsi.php');

} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>