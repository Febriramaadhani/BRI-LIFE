<?php 
include 'koneksi.php';
if (isset($_GET['idkontra'])) {
  $idkontra=$_GET['idkontra'];

  $tombol="update";


$sql = "SELECT * FROM list_kontrasepsi WHERE Id_Kontrasepsi='$idkontra' " ;
$result = $conn->query($sql);



foreach ($result as $dataedit ) {

 

  # code...
}

 $namakontra=$dataedit['Nama_Kontrasepsi'];

  # code...
}else{

  $tombol="simpan";
$namakontra="";


}







$sql = "SELECT * FROM list_kontrasepsi";
$result = $conn->query($sql);











 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Kontrasepsi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Input Kontrasepsi</h2>
  <form action="actionkontrasepsi.php" method="post">
    <div class="form-group">
      <label for="text">Nama Kontrasepsi:</label>
       <input  type="hidden" class="form-control" id="text" name="idkontra"  value="<?php echo $dataedit['Id_Kontrasepsi'] ?>">
      <input type="text" class="form-control" id="text" placeholder="Masukkan Nama Kontrasepsi" name="nkontra" required value="<?php echo $namakontra ?>">
    </div>
 
   
    <button name="<?php echo $tombol ?>" type="submit" class="btn btn-default"><?php echo $tombol; ?></button>
  </form>



  <table class="table">
    <thead>
      <tr>
        <th>Id Kontrasepsi</th>
        <th>Nama Kontrasepsi</th>
        <th>Action</th>
      </tr>
    </thead>



    <tbody>


      <?php 

      foreach ($result as $data ) {


        # code...
    

       ?>

      <tr>
        <td><?php   echo $data['Id_Kontrasepsi']; ?></td>
        <td><?php   echo $data['Nama_Kontrasepsi']; ?></td>
        <td><a href="kontrasepsi.php?idkontra=<?php  echo $data['Id_Kontrasepsi']; ?>" type="button" class="btn btn-info">Edit</a>  <a href="deletekontrasepsi.php?idkontra=<?php  echo $data['Id_Kontrasepsi']; ?>" type="button" class="btn btn-info">Delete</a> </td>
      </tr>

      <?php 
         }

       ?>
   
     
    </tbody>
  </table>










</div>

</body>
</html>
