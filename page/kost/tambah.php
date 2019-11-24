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
                                    <input type="text" name="tbh_kost" class="form-control"/>
                                </div>
                            </div>

                            <label>Alamat Kost</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_alamat" class="form-control"/>
                                </div>
                            </div>

                            <label>Harga</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_harga" class="form-control"/>
                                </div>
                            </div>

                            <label>Nama Pemilik</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_pemilik" class="form-control"/>
                                </div>
                            </div>

                            <label>No HP Pemilik</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_hp" class="form-control"/>
                                </div>
                            </div>

                            <label>Alamat Pemilik</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_almtpem" class="form-control"/>
                                </div>
                            </div>

                            <label>Rating</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="tbh_rating" class="form-control"/>
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

        $sql = $koneksi->query("insert into tabel_kost values('$tbh_kost', '$tbh_alamat', '$tbh_harga', '$tbh_pemilik', '$tbh_hp', '$tbh_almtpem', '$tbh_rating')");

        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert("DATA BERHASIL DISIMPAN");
                    window.location.href="?page=kost";
                </script>


            <?php
        }
    }




?>