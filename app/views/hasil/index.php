<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
     <div class="container">
        <div class="row mx-4 my-4">
                <div class="col-lg-6 col-md-10 shadow-sm p-3 mb-5 bg-body rounded">
                     <h3>Nama Saudara : <?php echo $data["nama"]?></h3>
                     <h5>Umur : <?php echo $data["umur"]?></h5>
                     <p>Total Kalori yang dibutuhkan : <b><?= $data['hasil']?> Kkal</b></p>
                </div>

                
                
                <div class="col-lg-6 col-md-8 px-5">
                    <div>
                        <h3>Rata-rata Kebutuhan Kalori Orang Dewasa</h3>

                        <ol>
                            <li>Untuk Pria, membutuhkan <b>2500 Kalori</b> per hari</li>
                            <li>Untuk Wanita, membutuhkan <b>2000 Kalori</b> per hari</li>
                        </ol>
                    </div>
                </div>

                
                <button type="button" class="btn btn-success"><a href="<?= BASEURL ?>/home">Kembali</a></button>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>