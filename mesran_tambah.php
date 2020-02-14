<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
				<br>
                    <h3 class="panel-title">Form Tambah Data Stock Oli</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="sisa" class="col-sm-3 control-label">Sisa</label>
                            <div class="col-sm-9">
                                <input type="text" name="sisa" class="form-control" id="inputEmail3" placeholder="sisa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="oli_masuk" class="col-sm-3 control-label">Oli Masuk</label>
                            <div class="col-sm-9">
                                <input type="text" name="oli_masuk" class="form-control" id="inputEmail3" placeholder="oli_masuk" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="oli_keluar" class="col-sm-3 control-label">Oli Keluar</label>
                            <div class="col-sm-9">
                                <input type="text" name="oli_keluar" class="form-control" id="inputEmail3" placeholder="oli_keluar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selisih" class="col-sm-3 control-label">Selisih</label>
                            <div class="col-sm-9">
                                <input type="text" name="selisih" class="form-control" id="inputEmail3" placeholder="selisih" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Tambah Data Stock Oli</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=mesran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Stock Oli
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$sisa=$_POST['sisa'];
    $oli_masuk=$_POST['oli_masuk'];
    $oli_keluar=$_POST['oli_keluar'];
    $selisih=$_POST['selisih'];
    //buat sql
    $sql="INSERT INTO tbl_mesran VALUES('','$sisa','$oli_masuk','$oli_keluar','$selisih')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=mesran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
