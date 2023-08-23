<?php
$nama = 'Diah Rita Nurholifah';
$prodi = 'D4-Teknologi Rekayasa Perangkat Lunak';
$jurusan = 'Bisnis dan Informatika';
$poltek = 'Politeknik Negeri Banyuwangi';
$mitra = 'GITS Indonesia';
$bidang = 'Full Stack Web Developer';
$foto = 'asset/diahrtn.JPG';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>BIODATA</title>
</head>

<body>

  <div class="container pt-5">
    <div class="card mt-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-warning">
      <div class="container">
        <br>
        <h3 class="mb-4 fs-3 text-dark card-header bg-white">
          <center><b>BIODATA DIRI</b></center>
        </h3>

        <div class='row g-0 position-relative'>
          <div class='col-md-6 mb-md-0 p-md-3'>
            <center><img src='<?php echo $foto; ?>' class="rounded" width="380" height="auto"></center>
          </div>
          <div class='col-md-6 p-4 ps-md-0'>
            <center>
              <table class="table table-borderless fs-6">
                <tr>
                  <td>Nama</td>
                  <td>: <?php echo $nama; ?></td>
                </tr>
                <tr>
                  <td>Program Studi</td>
                  <td>: <?php echo $prodi; ?></td>
                </tr>
                <tr>
                  <td>Jurusan</td>
                  <td>: <?php echo $jurusan; ?></td>
                </tr>
                <tr>
                  <td>Asal Politeknik</td>
                  <td>: <?php echo $poltek; ?></td>
                </tr>
                <tr>
                  <td>Mitra SIB</td>
                  <td>: <?php echo $mitra ?></ /td>
                </tr>
                <tr>
                  <td>Bidang</td>
                  <td>: <?php echo $bidang ?></ /td>
                </tr>
              </table>
            </center>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>

</html>