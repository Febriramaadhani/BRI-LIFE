
<?php 
include 'koneksi.php';


if (isset($_GET['idprov'])) {
  $idprov=$_GET['idprov'];

  $tombol="update";


$sql = "SELECT * FROM list_provinsi WHERE Id_Propinsi='$idprov' " ;
$result = $conn->query($sql);



foreach ($result as $dataedit ) {

 

  # code...
}

 $namaprov=$dataedit['Nama_Propinsi'];

  # code...
}else{

  $tombol="simpan";
$namaprov="";


}







$sql = "SELECT * FROM list_provinsi";
$result = $conn->query($sql);











 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Provinsi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Input Provinsi</h2>
  <form action="actionprovinsi.php" method="post">
    <div class="form-group">
      <label for="text">Nama Provinsi:</label>
       <input type="hidden"  class="form-control" id="text" name="idprov"  value="<?php echo $dataedit['Id_Propinsi'] ?>">
      <input type="text" class="form-control" id="text" placeholder="Masukkan Nama Provinsi" name="nprovinsi" required value="<?php echo $namaprov ?>">
    </div>
 
   
    <button name="<?php echo $tombol ?>" type="submit" class="btn btn-default"><?php echo $tombol; ?></button>
  </form>



  <table class="table">
    <thead>
      <tr>
        <th>Id Provinsi</th>
        <th>Nama Provinsi</th>
        <th>Action</th>
      </tr>
    </thead>



    <tbody>


      <?php 

      foreach ($result as $data ) {


        # code...
    

       ?>

      <tr>
        <td><?php   echo $data['Id_Propinsi']; ?></td>
        <td><?php   echo $data['Nama_Propinsi']; ?></td>
        <td><a href="provinsi.php?idprov=<?php  echo $data['Id_Propinsi']; ?>" type="button" class="btn btn-info">Edit</a>  <a href="deleteprovinsi.php?idprov=<?php  echo $data['Id_Propinsi']; ?>" type="button" class="btn btn-info">Delete</a> </td>
      </tr>

      <?php 
         }

       ?>
   
     
    </tbody>
  </table>










</div>

</body>
</html>
