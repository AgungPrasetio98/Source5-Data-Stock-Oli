<?php
$no=$_GET['no'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_karyawan WHERE no ='$no'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="nik">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap']?>"class="form-control" id="inputEmail3" placeholder="nama_lengkap" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?=$data['email']?>"class="form-control" id="inputEmail3" placeholder="email" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" value="<?=$data['jabatan']?>"class="form-control" id="inputEmail3" placeholder="jabatan" >
                            </div>
                        </div>     						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Karyawan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=karyawan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Karyawan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nik=$_POST['nik'];
    $nama_lengkap=$_POST['nama_lengkap'];
	$alamat=$_POST['alamat'];
    $email=$_POST['email'];
	$jabatan=$_POST['jabatan'];
    //buat sql
    $sql="UPDATE tbl_stock_oli SET nik='$nik',nama_lengkap='$nama_lengkap',alamat='$alamat',email='$email',jabatan='$jabatan' WHERE no ='$no'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=karyawan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



