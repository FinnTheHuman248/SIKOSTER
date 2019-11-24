
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KOSAN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                   
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Nama Kost</th>
                                        <th>Alamat</th>
                                        <th>Harga</th>
                                        <th>Pemilik</th>
                                        <th>No HP</th>
                                        <th>Alamat Pemilik</th>
                                        <th>Rating</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                       
                                <?php 

                                	$sql = $koneksi->query("select * from tabel_kost");
                                	while($data=$sql->fetch_assoc()){
                                 ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $data['nama_kost'] ?></td>
                                        <td><?php echo $data['alamat'] ?></td>
                                        <td><?php echo $data['harga'] ?></td>
                                        <td><?php echo $data['pemilik'] ?></td>
                                        <td><?php echo $data['no_hp'] ?></td>
                                        <td><?php echo $data['alamat_pemilik'] ?></td>
                                        <td><?php echo $data['rating'] ?></td>
                                        <td>
                                        	<a href="?page=kost&aksi=ubah&id=<?php echo $data['nama_kost']; ?>" class="btn btn-success">Ubah</a>
                                        	<a onclick="return confirm('Apakah Anda Yakin Akan Menghapus ?')" href="?page=kost&aksi=hapus&id=<?php echo $data['nama_kost']; ?>"class="btn btn-danger">Hapus</a>
                                        </td>

                                    </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                            <a href="?page=kost&aksi=tambah" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                </div>
