<?php  
	$kode2=$_GET['id'];

	$sql=$koneksi->query("delete from tabel_kost where nama_kost='$kode2' ");

if($sql){
?>
				 <script type="text/javascript">
                    alert("DATA BERHASIL DIHAPUS");
                    window.location.href="?page=kost";
                </script>


            <?php
        }

?>