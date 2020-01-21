<?php 

include 'koneksi.php';


$sqlprov = "SELECT * FROM list_provinsi";
$resultprov = $conn->query($sqlprov);

$sqlkontra = "SELECT * FROM list_kontrasepsi";
$resultkontra = $conn->query($sqlkontra);



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Pemakai Kontrasepsi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Pemakai Kontrasepsi</h2>
  <form action="actionpemakai.php" method="post">
    <div class="form-group">
  <label for="sel1">Pilih Provinsi:</label>


  <select class="form-control" id="idprovinsi" name="prop">
    
    <?php foreach ($resultprov as $data) {
      # code...
    
     ?>

    <option value="<?php echo $data['Id_Propinsi'] ?>"><?php echo $data['Nama_Propinsi']; ?></option>

    <?php 
}

     ?>

  </select>
</div>

<div class="form-group">
  <label for="sel1">Pilih Jenis Kontrasepsi :</label>
  <select class="form-control" id="sel1" name="kontra">
   <?php foreach ($resultkontra as $data) {
      # code...
    
     ?>

    <option value="<?php echo $data['Id_Kontrasepsi'] ?>"><?php echo $data['Nama_Kontrasepsi']; ?></option>

    <?php 
}

     ?>
  </select>
</div>
    <div class="form-group">
      <label for="text">Jumlah Pemakai:</label>
      <input type="text" class="form-control" id="text" placeholder="Masukkan Jumlah Pemakai" name="jp">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>




  <table class="table">
    <thead>

      


      <tr>
        <th>No</th>
        <th>Provinsi</th>
        <th>Pil</th>
         <th>Kondom</th>
        <th>IUD</th>
      </tr>


    </thead>



    <tbody>


      <?php 
      $no=1;

      foreach ($resultprov as $dataprovinsi ) {

        $idprovnew=$dataprovinsi['Id_Propinsi'];

        $sqlpil = "SELECT list_pemakai_kontrasepsi.Jumlah_Pemakai FROM list_provinsi INNER JOIN list_pemakai_kontrasepsi ON list_provinsi.Id_Propinsi=list_pemakai_kontrasepsi.Id_Propinsi WHERE list_pemakai_kontrasepsi.Id_Kontrasepsi=5 AND list_pemakai_kontrasepsi.Id_Propinsi='$idprovnew'";


        




   
   
        $resultpil = $conn->query($sqlpil);

        foreach ($resultpil as $pil) {

   

          # code...
        }



    

       ?>

      <tr>
        <td><?php   echo $no; ?></td>
        <td><?php   echo $dataprovinsi['Nama_Propinsi']; ?></td>
         <td><?php   echo $pil['Jumlah_Pemakai']; ?></td>
       
      </tr>

      <?php 
      $no++;
         }

       ?>
   
     
    </tbody>
  </table>
</div>








</body>
</html>
