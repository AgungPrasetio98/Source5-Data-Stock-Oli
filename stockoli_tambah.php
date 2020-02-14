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
                            <label for="id_oli" class="col-sm-3 control-label">Id Oli</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_oli" class="form-control" id="inputEmail3" placeholder="id_oli">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_oli" class="col-sm-3 control-label">Jenis Oli</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_oli" class="form-control" id="inputEmail3" placeholder="jenis_oli" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="merk" class="col-sm-3 control-label">Merk</label>
                            <div class="col-sm-9">
                                <input type="text" name="merk" class="form-control" id="inputEmail3" placeholder="merk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="harga" >
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
                    <a href="?page=stockoli&actions=tampil" class="btn btn-danger btn-sm">
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
	$id_oli=$_POST['id_oli'];
    $jenis_oli=$_POST['jenis_oli'];
    $merk=$_POST['merk'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="INSERT INTO tbl_stock_oli VALUES('','$id_oli','$jenis_oli','$merk','$harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=evalube&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
