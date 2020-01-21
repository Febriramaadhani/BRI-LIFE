<?php 
include 'koneksi.php';

$idkontrasepsi=$_POST['idkontra'];

$kontrasepsi = $_POST['nkontra'];


if (isset($_POST['update'])) {


$sql = "UPDATE list_kontrasepsi SET Nama_Kontrasepsi='$kontrasepsi' WHERE Id_Kontrasepsi=$idkontrasepsi";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
     header('Location: kontrasepsi.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
	
	# code...
}else {


	$sql = "INSERT INTO list_kontrasepsi (Nama_Kontrasepsi)
VALUES ('$kontrasepsi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: kontrasepsi.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



}






 ?>