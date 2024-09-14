<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from pesan_system where Id_pesan='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$row=mysqli_fetch_array($hasil1);
mysqli_query($koneksi,"UPDATE pesan_system set baca='1' where Id_pesan='$_POST[Id]'");
?>
<div class="form-group">
    
                                                            <label class="form-label" for="full-name-1">Pengirim</label>
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="" placeholder="" value="<?php echo $row['pengirim'];?>" readonly> 
</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Judul Pesan</label>
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="" placeholder="" value="<?php echo $row['judul_pesan'];?>" readonly> 
</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Pesan</label>
                                                            <div class="form-control-wrap">
                                                            <textarea class="form-control"  cols="10" disabled><?php echo $row['detail_pesan'];?></textarea>
    
</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="form-label" for="full-name-1">Tanggal Kirim</label>
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="" placeholder="" value="<?php echo $row['tanggal_kirim'];?>" readonly> 
</div>
                                                        </div>
                                                    </div>