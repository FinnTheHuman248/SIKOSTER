<<?php 
    $nama = $_GET['id'];

    $sql = $koneksi->query("select * from tabel_kost where nama_kost='$nama'");

    $tampil = $sql->fetch_assoc();


 ?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAMBAH KOST
                                <small></small>
                            </h2>
                        </div>

                            <div class="body">
                            <form method="POST">

                            <label>Nama Kost</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_kost" value="<?php echo $tampil['nama_kost']; ?>" class="form-control"/>
                                </div>
                            </div>

                            <label>Alamat Kost</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_alamat" value="<?php echo $tampil['alamat']; ?>" class="form-control"/>
                                </div>
                            </div>

                            <label>Harga</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_harga" value="<?php echo $tampil['harga']; ?>" class="form-control"/>
                                </div>
                            </div>

                            <label>Nama Pemilik</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_pemilik" value="<?php echo $tampil['pemilik']; ?>" class="form-control"/>
                                </div>
                            </div>

                            <label>No HP Pemilik</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_hp" value="<?php echo $tampil['no_hp']; ?>" class="form-control"/>
                                </div>
                            </div>

                            <label>Alamat Pemilik</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_almtpem" value="<?php echo $tampil['alamat_pemilik']; ?>" class="form-control"/>
                                </div>
                            </div>

                            <label>Rating</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_rating" value="<?php echo $tampil['rating']; ?>" class="form-control"/>
                                </div>
                            </div>

                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </form>
                    
<?php  
    
    if (isset($_POST['simpan'])) {
        
        $tbh_kost = $_POST['tbh_kost'];
        $tbh_alamat = $_POST['tbh_alamat'];
        $tbh_harga = $_POST['tbh_harga'];
        $tbh_pemilik = $_POST['tbh_pemilik'];
        $tbh_hp = $_POST['tbh_hp'];
        $tbh_almtpem = $_POST['tbh_almtpem'];
        $tbh_rating = $_POST['tbh_rating'];

        $sql2 = $koneksi->query("update tabel_kost set nama_kost='$tbh_kost', alamat='$tbh_alamat', harga='$tbh_harga', pemilik='$tbh_pemilik', no_hp='$tbh_hp', alamat_pemilik='$tbh_almtpem', rating='$tbh_rating' where nama_kost='$nama'");

        if ($sql2) {
            ?>
                <script type="text/javascript">
                    alert("DATA BERHASIL DIUBAH");
                    window.location.href="?page=kost";
                </script>


            <?php
        }
    }




?>