<?php 
include 'koneksi.php';

$idprov=$_POST['idprov'];

$provinsi = $_POST['nprovinsi'];


if (isset($_POST['update'])) {


$sql = "UPDATE list_provinsi SET Nama_Propinsi='$provinsi' WHERE Id_Propinsi=$idprov";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
     header('Location: provinsi.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
	
	# code...
}else {


	$sql = "INSERT INTO list_provinsi (Nama_Propinsi)
VALUES ('$provinsi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: provinsi.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



}






 ?>