<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register Siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <h4>Register Siswa</h4>

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Your Name" />
            </div>

            <div class="form-group">
                <label for="name">Kelas</label>
                <input class="form-control" type="text" name="kelas" placeholder="Kelas" />
            </div>

            <div class="form-group">
                <label for="name">Address</label>
                <input class="form-control" type="text" name="address" placeholder="Your Address" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="Submit" value="Daftar" />
        </form>
            
        </div>

    </div>
</div>

<?php 
  include("koneksi.php");

  if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $kelas = $_POST['kelas'];
    $address = $_POST['address'];

    $sql = "INSERT INTO tb_siswa (nama,kelas,alamat) VALUES ('$name','$kelas','$address')";
    $peserta = mysqli_query($koneksi, $sql);

        if ($peserta) {
          echo "Success";
          exit;
        }
    else {
      echo "Failed";
      exit;
    }
  }
  ?>

</body>
</html>