<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="m-5 border border-secondary p-4 rounded" style="padding :10px">
    <div class="row" style="padding:10px">
    <form class="form-horizontal" method="POST" action="form_nilai.php">
        <h5> Sistem Penilaian </h5>
            <hr></hr>
            <div class="form-group row">
                <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book"></i>
                    </div>
                    </div> 
                    <input id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" required="required" class="custom-select">
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="ddp">Dasar - Dasar Pemerograman</option>
                    <option value="basis_data">Basis Data</option>
                    <option value="matkom">Matematika Komputer</option>
                    <option value="sistem_operasi">Sistem Operasi</option>
                    <option value="bahasa_indonesia">Bahasa Indonesia</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Proses</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

    <div class="m-5 border border-secondary p-4 rounded">
        <?php
            if(empty($_POST['submit'])){
                
                $nama = $_POST['nama'];
                $matkul = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];
                $nilai_akhir = $nilai_uts + $nilai_uas + $nilai_tugas;
              
                switch($matkul){
                    case 'ddp': $nama_matkul = 'Dasar Dasar Pemerograman'; break;
                    case 'basis_data': $nama_matkul = 'Basis Data'; break;
                    case 'matematika_komputer': $nama_matkul = 'Matematika Komputer'; break;
                    case 'sistem_operasi': $nama_matkul = 'Sistem Operasi'; break;
                    case 'bahasa_indonesia': $nama_matkul = 'Bahasa Indonesia'; break;
                    default: $nama_matkul = '';
                }

                echo 'Nama : '.$nama.'<br>';
                echo 'Matkul : '.$nama_matkul.'<br>';
                echo 'Nilai UTS : '.$nilai_uts.'<br>';
                echo 'Nilai UAS : '.$nilai_uas.'<br>';
                echo 'Nilai Tugas : '.$nilai_tugas.'<br>';
                echo 'Nilai Akhir : '.$nilai_akhir. '<br>';
            }

            
               
        ?>
    </div>
</body>
</html>