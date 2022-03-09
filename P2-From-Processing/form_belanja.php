<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="m-5 border border-primary p-4 rounded">
        <div class="row" style="padding:10px">
        <div class="col-8">
        <form method="POST" action="form_belanja.php" autocomplete="off">
            <h5> Belanja Online </h5>
            <hr></hr>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="nama">Customer</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                    </div>
                    </div> 
                    <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>

    
  <div class="form-group row message-enter message-enter-active">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div> 

  <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
    </div>
<div class="col-4">
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Daftar Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">TV : 4.200.000</td>
    </tr>
    <tr>
      <td scope="row">Kulkas : 3.100.000</td>
    </tr>
    <tr>
      <td scope="row">Mesin Cuci : 3.800.000</td>
    </tr>
  </tbody>
  <thead class="thead-light">
    <tr>
      <th scope="col">Harga Dapat Berubah Setiap Saat</th>
    </tr>
  </thead>
</table>

  </div>

<hr>

<div class="m-5 border border-primary p-4 rounded">
<?php

   $submit= $_POST["submit"];
   $customer = $_POST["nama"];
   $produk = $_POST["produk"];
   $jumlah = $_POST["jumlah"];

    switch ($produk) {
      case 'Tv':
        $harga = 4200000;
        $harga = $harga * $jumlah;
        echo "Nama Customer : " .$customer;
        echo "<br> Produk Pilihan : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') . ",-";
        break;
      
      case 'Kulkas':
        $harga = 3100000;
        $harga = $harga * $jumlah;
        echo "Nama Customer : " .$customer;
        echo "<br> Produk Pilihan : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') . ",-";
        break;
      
      case 'Mesin Cuci':
        $harga = 3800000;
        $harga = $harga * $jumlah;
        echo "Nama Customer : " .$customer;
        echo "<br> Produk Pilihan : " .$produk;
        echo "<br> Jumlah Beli : " .$jumlah;
        echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') .",-";
        break;
      default:
        # code...
        break;

               
            }
?>
    </div>
    </body>
</html>