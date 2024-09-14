<?php
include "../../../config/koneksi_li.php";
include "../../../setting.php";
$sql1= "SELECT * FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where a.Id_rtlh='$_POST[Id]' order by a.Id_rtlh"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>

                                        <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kabupaten/Kota</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kota'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kecamatan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kelurahan/Desa</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" value="<?php echo $dataout['nama_kelurahan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">No. KTP</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Nama Lengkap Kepala Rumah Tangga</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">No. Handphone</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jenis Kelamin</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Alamat Rumah</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <textarea class="form-control no-resize"><?php echo $dataout['alamat_rumah'];?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Pekerjaan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Penghasilan Perbulan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Status Kepemilikan Rumah</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Aset Rumah Ditempat Lain</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Status Kepemilikan Tanah</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jenis Kawasan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ----------------------------------------------------------------------- -->
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Pondasi</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Kolom</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Rangka Atap</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Plafon</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Balok</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">SLOOF</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jendela</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Ventilasi</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kondisi Lantai</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Lantai</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kondisi Dinding</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Dinding</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kondisi Atap</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Atap</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Luas Rumah M2</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jumlah Penghuni</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Sumber Air Minum</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jarak SAM-TPA Tinja</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kamar Mandi Dan Jamban</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jenis Kloset</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jenis TPA Tinja</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Foto Rumah</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <img src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['foto'];?>" class="img-fluid" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Lokasi Rumah</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <div id="map1"></div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ----------------------------------------------------------------------- -->
                                               
                                           

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ7ATf0VMQX0nJS_-tI6oIk80R_3H2pOI&callback=initMap" type="text/javascript"></script>
<style type="text/css">
#map1 {
height: 400px;

}
</style>
<script type="text/javascript">
//* Fungsi untuk mendapatkan nilai latitude longitude
 
 var locations = [
    <?php
$sql_lokasi="select * from rtlh where Id_rtlh='$_POST[Id]'";
$result=mysqli_query($koneksi,$sql_lokasi);
// ambil nama,lat dan lon dari table lokasi dengan menggunakan mysql_fetch_object, sesuaikan file nya yg ditabel.
while($data=mysqli_fetch_array($result)){
?>
['<?php echo $data['Id_rtlh'];?>', '<?php echo $data['latitude'];?>', '<?php echo $data['longitude'];?>'],
<?php
}
?>
];
 
var map = new google.maps.Map(document.getElementById('map1'), {
zoom: 14,
// Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
center: new google.maps.LatLng(locations[0][1],locations[0][2]),
mapTypeId: google.maps.MapTypeId.ROADMAP 
});
//posisi awal marker
var latLng = new google.maps.LatLng(locations[0][1],locations[0][2]);
 
/* buat marker yang bisa di drag lalu
panggil fungsi updateMarkerPosition(latLng)
dan letakan posisi terakhir di id=latitude dan id=longitude
*/
var marker = new google.maps.Marker({
position : latLng,
title : 'lokasi',
map : map,
draggable : false,
animation: google.maps.Animation.DROP,
icon: 'marker1.png'
});
</script>

