<?php
$no=$_GET['no'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_federal WHERE no ='$no'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Stock Oli</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="sisa" class="col-sm-3 control-label">Sisa</label>
                            <div class="col-sm-9">
                                <input type="text" name="sisa" value="<?=$data['sisa']?>"class="form-control" id="inputEmail3" placeholder="sisa">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="oli_masuk" class="col-sm-3 control-label">Oli Masuk</label>
                            <div class="col-sm-9">
                                <input type="text" name="oli_masuk" value="<?=$data['oli_masuk']?>"class="form-control" id="inputEmail3" placeholder="oli_masuk" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="oli_keluar" class="col-sm-3 control-label">Oli Keluar</label>
                            <div class="col-sm-9">
                                <input type="text" name="oli_keluar" value="<?=$data['oli_keluar']?>"class="form-control" id="inputEmail3" placeholder="oli_keluar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="selisih" class="col-sm-3 control-label">Selisih</label>
                            <div class="col-sm-9">
                                <input type="text" name="selisih" value="<?=$data['selisih']?>"class="form-control" id="inputEmail3" placeholder="selisih" >
                            </div>
                        </div>     
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Stock Oli</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=federal&actions=tampil" class="btn btn-danger btn-sm">
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
    $sql="UPDATE tbl_federal SET sisa='$sisa',oli_masuk='$oli_masuk',oli_keluar='$oli_keluar',selisih='$selisih' WHERE no ='$no'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=federal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



