<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2.1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-9">
                <!-- Buat form -->
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Costumer</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                            </div> 
                            <input id="text" name="costumer" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                        <input id="text1" name="jumlah" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-3">
                <!-- daftar harga -->
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- print -->
    
    <hr>

    <?php
        if(isset($_POST['submit'])&& isset($_POST['produk'])) :
    ?>

    Nama Costumer : <?= $_POST['costumer'];?> <br>
    Produk Pilihan : <?= $_POST['produk'];?> <br>
    Jumlah Beli : <?= $_POST['jumlah'];?> <br>

    <?php
        if($_POST['produk'] == "tv" && $_POST['jumlah'] >= 1 ){
            $harga = 4200000 * $_POST['jumlah'];
            echo '<br>Total Belanja : ' . $harga;
        }elseif ($_POST['produk'] == "kulkas" && $_POST['jumlah'] >= 1 ){
            $harga = 3100000 * $_POST['jumlah'];
            echo '<br>Total Belanja : ' . $harga;
        }elseif ($_POST['produk'] == "mesincuci" && $_POST['jumlah'] >= 1 ){
            $harga = 3800000 * $_POST['jumlah'];
            echo '<br>Total Belanja : ' . $harga;
        }
    ?>
    
    <?php
        endif
    ?>
</body>
</html>