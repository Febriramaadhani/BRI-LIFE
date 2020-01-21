<?php 

include 'koneksi.php';

$idprovinsi=$_POST['prop'];
$idkontrasepsi=$_POST['kontra'];
$jumlahpemakai=$_POST['jp'];




$sqldata= "SELECT * FROM list_pemakai_kontrasepsi WHERE Id_Propinsi='$idprovinsi' AND Id_Kontrasepsi='$idkontrasepsi' ";
$resultdata = $conn->query($sqldata);

if ($resultdata->num_rows > 0) {
    // output data of each row
    foreach ($resultdata as $data) {
    	$jumlahp=$data['Jumlah_Pemakai'];
    	$idlist=$data['Id_List'];
    	# code...
    }

    $jumlahpbaru=$jumlahp+$jumlahpemakai;


    $sqlupdate = "UPDATE list_pemakai_kontrasepsi SET Jumlah_Pemakai='$jumlahpbaru' WHERE Id_List=$idlist";

if ($conn->query($sqlupdate) === TRUE) {
    echo "Record updated successfully";
     header('Location: pemakai.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();





}else {

$sql = "INSERT INTO list_pemakai_kontrasepsi (Id_Propinsi,Id_Kontrasepsi,Jumlah_Pemakai)
VALUES ('$idprovinsi','$idkontrasepsi','$jumlahpemakai')";





if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: pemakai.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	
}













 ?>