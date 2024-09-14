<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from pesan_kirim_validasi a inner join kota b on a.kode_kota=b.kode_kota where a.Id_pesan='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$row=mysqli_fetch_array($hasil1);
mysqli_query($koneksi,"UPDATE pesan_kirim_validasi set baca='1' where Id_pesan='$_POST[Id]'");
?>
<div class="form-group">
    
                                                            <label class="form-label" for="full-name-1">Nama Kabupaten</label>
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="kode_kota1" placeholder="" value="<?php echo $row['nama_kota'];?>" readonly> 
</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Jenis Data</label>
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="jenis_data1" placeholder="" value="<?php echo $row['jenis_data'];?>" readonly> 
</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Pesan</label>
                                                            <div class="form-control-wrap">
                                                            <textarea class="form-control"  cols="10" disabled><?php echo $row['pesan'];?></textarea>
    
</div>
                                                        </div>
                                                    </div>