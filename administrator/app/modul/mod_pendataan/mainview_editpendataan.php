<?php
$key=$_GET['key'];
$sql1= "SELECT * from rtlh a inner join kota b on a.kode_kota=b.kode_kota inner join kecamatan c on a.kode_kec=c.kode_kec inner join kelurahan d on a.kode_kel=d.kode_kel where sha(a.Id_rtlh)='$key'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
                                                            
<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Update Data Pendataan</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                        <input type="hidden" class="form-control" id="key" value="<?php echo $key;?>">
                                        <input type="hidden" class="form-control" id="Id_rtlh" value="<?php echo $dataout['Id_rtlh'];?>">

                                        <form  class="gy-3">
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['nama_kota'];?>" readonly>
                                                           
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['nama_kecamatan'];?>" readonly>
                                                           
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['nama_kelurahan'];?>" readonly>
                                                           
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
                                                                <input type="text" style="background-color: yellow;" class="form-control" id="no_ktp" value="<?php echo $dataout['no_ktp'];?>" minlength="16" maxlength="16" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" readonly>
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
                                                                <input type="text" style="background-color: yellow;" class="form-control" id="nama_kk" value="<?php echo $dataout['nama_kk'];?>">
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
                                                                <input type="text" style="background-color: yellow;" class="form-control" id="no_hp" value="<?php echo $dataout['no_hp'];?>" minlength="10" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
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
                                                            <select class="form-select" id="jenis_kelamin" style="background-color: yellow;" >
                                                            <?php
                                                            if($dataout['jenis_kelamin']=='Laki-Laki'){
                                                            ?>
                                                                        <option value="Laki-Laki" selected>Laki-Laki</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                            <?php
                                                            }else{
                                                            ?>
                                                             <option value="Laki-Laki">Laki-Laki</option>
                                                             <option value="Perempuan" selected>Perempuan</option>
                                                            <?php
                                                            }
                                                            ?>                        
                                                                    
                                                                    </select>
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
                                                            <textarea style="background-color: yellow;" class="form-control no-resize" id="alamat_rumah"><?php echo $dataout['alamat_rumah'];?></textarea>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['pekerjaan'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="pekerjaan1" value="<?php echo $dataout['pekerjaan'];?>">
                                                            <select class="form-select" id="pekerjaan">
                                                            <option value=""> Pilih Untuk Rubah Jenis Pekerjaan </option>
                                                                        <option value="PNS">PNS</option>
                                                                        <option value="BUMN/D">BUMN/D</option>
                                                                        <option value="TNI/POLRI">TNI/POLRI</option>
                                                                        <option value="KARYAWAN">KARYAWAN</option>
                                                                        <option value="WIRAUSAHA">WIRAUSAHA</option>
                                                                        <option value="PETANI">PETANI</option>
                                                                        <option value="BURUH HARIAN">BURUH HARIAN</option>
                                                                        <option value=">OJEK/SOPIR">OJEK/SOPIR</option>
                                                                        <option value="NELAYAN">NELAYAN</option>
                                                                        <option value="PRAMUWISMA">PRAMUWISMA</option>
                                                                        <option value="LANSIA/IRT">LANSIA/IRT</option>
                                                                        <option value="TUKANG/MONTIR">TUKANG/MONTIR</option>
                                                                        <option value="HONORER">HONORER</option>
                                                                        <option value="PENSIUNAN">PENSIUNAN</option>
                                                                        <option value="LAINNYA">LAINNYA</option>
                                                                        <option value="TIDAK BEKERJA">TIDAK BEKERJA</option>
                                                                        </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['penghasilan'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="penghasilan1" value="<?php echo $dataout['penghasilan'];?>">
                                                            
                                                            <select class="form-select" id="penghasilan">
                                                            <option value=""> Pilih Untuk Rubah Penghasilan </option>
                                                                        <option value="0 - 1,2 JUTA">0 - 1,2 JUTA</option>
                                                                        <option value="1,3 - 1,8 JUTA">1,3 - 1,8 JUTA</option>
                                                                        <option value="1,9 - 2,1 JUTA">1,9 - 2,1 JUTA</option>
                                                                        <option value="2,2 - 2,6 JUTA">2,2 - 2,6 JUTA</option>
                                                                        <option value="2,7 - 3,1 JUTA">2,7 - 3,1 JUTA</option>
                                                                        <option value="3,2 - 3,6 JUTA">3,2 - 3,6 JUTA</option>
                                                                        <option value="3,7 - 4,2 JUTA">3,7 - 4,2 JUTA</option>
                                                                        <option value="> 4,2 JUTA">> 4,2 JUTA</option>
                                                                        </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['sts_kepemilikan_rumah'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="sts_kepemilikan_rumah1" value="<?php echo $dataout['sts_kepemilikan_rumah'];?>">
                                                           
                                                            <select class="form-select" id="sts_kepemilikan_rumah">
                                                            <option value=""> Pilih Untuk Rubah Status Kepemilikan Rumah </option>
                                                                        <option value="MILIK SENDIRI">MILIK SENDIRI</option>
                                                                        <option value="KONTRAK / SEWA">KONTRAK / SEWA</option>
                                                                        <option value="BUKAN MILIK SENDIRI">BUKAN MILIK SENDIRI</option>
                                                                        </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['aset_rumah'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="aset_rumah1" value="<?php echo $dataout['aset_rumah'];?>">
                                                           
                                                            <select class="form-select" id="aset_rumah">
                                                            <option value=""> Pilih Untuk Rubah Aset Rumah Ditempat Lain </option>
                                                            <option value="ADA">ADA</option>
                                                            <option value="TIDAK ADA">TIDAK ADA</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['sts_kepemilikan_tanah'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="sts_kepemilikan_tanah1" value="<?php echo $dataout['sts_kepemilikan_tanah'];?>">
                                                           
                                                            <select class="form-select" id="sts_kepemilikan_tanah">
                                                            <option value=""> Pilih Untuk Rubah Status Kepemilikan Tanah </option>
                                                                        <option value="MILIK SENDIRI">MILIK SENDIRI</option>
                                                                        <option value="BUKAN MILIK SENDIRI">BUKAN MILIK SENDIRI</option>
                                                                        <option value="MILIK KELUARGA/WARIS">MILIK KELUARGA/WARIS</option>
                                                                        <option value="TANAH NEGARA">TANAH NEGARA</option>
                                                                        <option value="TANAH ILEGAL">TANAH ILEGAL</option>
                                                                        </select>
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
                                                            <?php
                                                            if($dataout['jenis_kawasan']=='KUMUH'){
                                                            ?>
                                                             <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['jenis_kawasan'];?>" readonly>
                                                             <input type="hidden" class="form-control" id="jenis_kawasan1" value="<?php echo $dataout['jenis_kawasan'];?>">
                                                            <?php
                                                            }else{
                                                            ?>
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['jenis_kawasan'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="jenis_kawasan1" value="<?php echo $dataout['jenis_kawasan'];?>">
                                                           
                                                            <select class="form-select js-select2" multiple="multiple" id="jenis_kawasan" data-placeholder="Pilih Untuk Rubah Jenis Kawasan">
                                                          

                                                                        <option value="KUMUH KABUPATEN">KUMUH KABUPATEN</option>
                                                                        <option value="STRATEGIS">STRATEGIS</option>
                                                                        <option value="STUNTING">STUNTING</option>
                                                                        <option value="KEMISKINAN EKSTRIM">KEMISKINAN EKSTRIM</option>
                                                                        <option value="PARIWISATA">PARIWISATA</option>
                                                                        <option value="TERTINGGAL/TERDEPAN/TERLUAR">TERTINGGAL/TERDEPAN/TERLUAR</option>
                                                                        <option value="TRANSMIGRASI">TRANSMIGRASI</option>
                                                                        <option value="PRIORITAS PENDATAAN KABUPATEN">PRIORITAS PENDATAAN KABUPATEN</option>
                                                                      
                                                                      
                                                                    
                                                                    </select>
                                                                    <?php
                                                            }
                                                            ?>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['material_pondasi'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="material_pondasi1" value="<?php echo $dataout['material_pondasi'];?>">
                                                           
                                                            <select class="form-select" id="material_pondasi">
                                                            <option value=""> Pilih Untuk Rubah Material Pondasi </option>
                                                            <option value="BATU BELAH">BATU BELAH</option>
                                                            <option value="BATU BATA">BATU BATA</option>
                                                            <option value="BATAKO">BATAKO</option>
                                                            <option value="TIDAK ADA">TIDAK ADA</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['material_kolom'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="material_kolom1" value="<?php echo $dataout['material_kolom'];?>">
                                                           
                                                            <select class="form-select" id="material_kolom">
                                                            <option value=""> Pilih Untuk Rubah Material Kolom </option>
                                                            <option value="BETON">BETON</option>
                                                            <option value="KAYU">KAYU</option>
                                                            <option value="TIDAK ADA KOLOM">TIDAK ADA KOLOM</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['material_rangka_atap'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="material_rangka_atap1" value="<?php echo $dataout['material_rangka_atap'];?>">
                                                           
                                                            <select class="form-select" id="material_rangka_atap">
                                                            <option value=""> Pilih Untuk Rubah Material Rangka Atap </option>
                                                            <option value="KAYU">KAYU</option>
                                                            <option value="BAMBU">BAMBU</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['material_plafon'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="material_plafon1" value="<?php echo $dataout['material_plafon'];?>">
                                                           
                                                            <select class="form-select" id="material_plafon">
                                                            <option value=""> Pilih Untuk Rubah Material Plafon </option>
                                                            <option value="TRIPLEK">TRIPLEK</option>
                                                            <option value="GERIBIK">GERIBIK</option>
                                                            <option value="TIDAK ADA">TIDAK ADA</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['material_balok'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="material_balok1" value="<?php echo $dataout['material_balok'];?>">
                                                           
                                                            <select class="form-select" id="material_balok">
                                                            <option value=""> Pilih Untuk Rubah Material Balok </option>
                                                            <option value="BETON">BETON</option>
                                                            <option value="KAYU">KAYU</option>
                                                            <option value="BAMBU">BAMBU</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['sloof'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="sloof1" value="<?php echo $dataout['sloof'];?>">
                                                           
                                                            <select class="form-select" id="sloof">
                                                            <option value=""> Pilih Untuk Rubah SLOOF </option>
                                                            <option value="ADA">ADA</option>
                                                            <option value="TIDAK ADA">TIDAK ADA</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['jendela'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="jendela1" value="<?php echo $dataout['jendela'];?>">
                                                           
                                                            <select class="form-select" id="jendela">
                                                            <option value=""> Pilih Untuk Rubah Jendela </option>
                                                            <option value="ADA">ADA</option>
                                                            <option value="TIDAK ADA">TIDAK ADA</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['ventilasi'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="ventilasi1" value="<?php echo $dataout['ventilasi'];?>">
                                                           
                                                            <select class="form-select" id="ventilasi">
                                                            <option value=""> Pilih Untuk Rubah Ventilasi </option>
                                                            <option value="ADA">ADA</option>
                                                            <option value="TIDAK ADA">TIDAK ADA</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['kondisi_lantai'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="kondisi_lantai1" value="<?php echo $dataout['kondisi_lantai'];?>">
                                                           
                                                            <select class="form-select" id="kondisi_lantai">
                                                            <option value=""> Pilih Untuk Rubah Kondisi Lantai </option>
                                                            <option value="LAYAK">LAYAK</option>
                                                            <option value="MENUJU LAYAK">MENUJU LAYAK</option>
                                                            <option value="AGAK LAYAK">AGAK LAYAK</option>
                                                            <option value="KURANG LAYAK">KURANG LAYAK</option>
                                                            <option value="TIDAK LAYAK">TIDAK LAYAK</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['material_lantai'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="material_lantai1" value="<?php echo $dataout['material_lantai'];?>">
                                                           
                                                            <select class="form-select" id="material_lantai">
                                                            <option value=""> Pilih Untuk Rubah Material Lantai </option>
                                                            <option value="KERAMIK">KERAMIK</option>
                                                            <option value="UBIN/TEHEL">UBIN/TEHEL</option>
                                                            <option value="PLESTERAN">PLESTERAN</option>
                                                            <option value="KAYU">KAYU</option>
                                                            <option value="BAMBU">BAMBU</option>
                                                            <option value="TANAH">TANAH</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['kondisi_dinding'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="kondisi_dinding1" value="<?php echo $dataout['kondisi_dinding'];?>">
                                                           
                                                            <select class="form-select" id="kondisi_dinding">
                                                            <option value=""> Pilih Untuk Rubah Kondisi Dinding </option>
                                                            <option value="LAYAK">LAYAK</option>
                                                            <option value="MENUJU LAYAK">MENUJU LAYAK</option>
                                                            <option value="AGAK LAYAK">AGAK LAYAK</option>
                                                            <option value="KURANG LAYAK">KURANG LAYAK</option>
                                                            <option value="TIDAK LAYAK">TIDAK LAYAK</option>
                                                                     </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['material_dinding'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="material_dinding1" value="<?php echo $dataout['material_dinding'];?>">
                                                           
                                                            <select class="form-select" id="material_dinding">
                                                            <option value=""> Pilih Untuk Rubah Material Dinding </option>
                                                            <option value="TEMBOK">TEMBOK</option>
                                                            <option value="KAYU">KAYU</option>
                                                            <option value="PLESTERAN">PLESTERAN</option>
                                                            <option value="BAMBU">BAMBU</option>
                                                            <option value="GRC">GRC</option>
                                                            <option value="LAINNYA">LAINNYA</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['kondisi_atap'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="kondisi_atap1" value="<?php echo $dataout['kondisi_atap'];?>">
                                                           
                                                            <select class="form-select" id="kondisi_atap">
                                                            <option value=""> Pilih Untuk Rubah Kondisi Atap </option>
                                                            <option value="LAYAK">LAYAK</option>
                                                            <option value="MENUJU LAYAK">MENUJU LAYAK</option>
                                                            <option value="AGAK LAYAK">AGAK LAYAK</option>
                                                            <option value="KURANG LAYAK">KURANG LAYAK</option>
                                                            <option value="TIDAK LAYAK">TIDAK LAYAK</option>
                                                                      </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['material_atap'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="material_atap1" value="<?php echo $dataout['material_atap'];?>">
                                                           
                                                            <select class="form-select" id="material_atap">
                                                            <option value=""> Pilih Untuk Rubah Material Atap </option>
                                                            <option value="GENTENG">GENTENG</option>
                                                            <option value="SENG">SENG</option>
                                                            <option value="KAYU">KAYU</option>
                                                            <option value="IJUK">IJUK</option>
                                                            <option value="JERAMI">JERAMI</option>
                                                            <option value="RUMBIA">RUMBIA</option>
                                                            <option value="DAUN">DAUN</option>
                                                            <option value="ASBES">ASBES</option>
                                                            <option value="BAMBU">BAMBU</option>
                                                            
                                                                    </select>
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
                                                                <input type="text" style="background-color: yellow;" class="form-control" id="luas_rumah" value="<?php echo $dataout['luas_rumah'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
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
                                                                <input type="text" style="background-color: yellow;" class="form-control" id="jumlah_penghuni" value="<?php echo $dataout['jumlah_penghuni'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="1" maxlength="3">
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['sumber_air_minum'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="sumber_air_minum1" value="<?php echo $dataout['sumber_air_minum'];?>">
                                                           
                                                            <select class="form-select" id="sumber_air_minum">
                                                            <option value=""> Pilih Untuk Rubah Sumber Air Minum </option>
                                                            <option value="PERPIPAAN">PERPIPAAN</option>
                                                            <option value="AIR KEMASAN">AIR KEMASAN</option>
                                                            <option value="SUMUR">SUMUR</option>
                                                            <option value="MATA AIR">MATA AIR</option>
                                                            <option value="AIR HUJAN">AIR HUJAN</option>
                                                            <option value="LAINNYA">LAINNYA</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['jarak_tinja'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="jarak_tinja1" value="<?php echo $dataout['jarak_tinja'];?>">
                                                           
                                                            <select class="form-select" id="jarak_tinja">
                                                            <option value=""> Pilih Untuk Rubah Jarak SAM-TPA Tinja </option>
                                                            <option value="> 10 METER">> 10 METER</option>
                                                            <option value="< 10 METER">< 10 METER</option>
                                                                    </select>
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
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['jamban'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="jamban1" value="<?php echo $dataout['jamban'];?>">
                                                           
                                                            <select class="form-select" id="jamban">
                                                            <option value=""> Pilih Untuk Rubah Kamar Mandi Dan Jamban </option>
                                                            <option value="SENDIRI">SENDIRI</option>
                                                            <option value="BERSAMA / MCK KOMUNAL">BERSAMA / MCK KOMUNAL</option>
                                                            <option value="TIDAK ADA">TIDAK ADA</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jenis Kloset</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control" value="<?php echo $dataout['jenis_kloset'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="jenis_kloset1" value="<?php echo $dataout['jenis_kloset'];?>">
                                                           
                                                            <select class="form-select" id="jenis_kloset">
                                                            <option value=""> Pilih Untuk Rubah Jenis Kloset </option>
                                                            <option value="LEHER ANGSA">LEHER ANGSA</option>
                                                            <option value="PLENGSENGAN">PLENGSENGAN</option>
                                                            <option value="CEMPLUNG/CUBLUK">CEMPLUNG/CUBLUK</option>
                                                                    </select>
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
                                                            <input style="background-color: yellow;" type="text" class="form-control" value="<?php echo $dataout['jenis_tpa_tinja'];?>" readonly>
                                                            <input type="hidden" class="form-control" id="jenis_tpa_tinja1" value="<?php echo $dataout['jenis_tpa_tinja'];?>">
                                                           
                                                            <select class="form-select" id="jenis_tpa_tinja">
                                                            <option value=""> Pilih Untuk Rubah Jenis TPA </option>
                                                            <option value="TANGKI SEPTIK">TANGKI SEPTIK</option>
                                                            <option value="IPAL">IPAL</option>
                                                            <option value="KOLAM/SAWAH/SUNGAI/DANAU/LAUT">KOLAM/SAWAH/SUNGAI/DANAU/LAUT</option>
                                                            <option value="LUBANG TANAH">LUBANG TANAH</option>
                                                            <option value="PANTAI/TANAH LAPANG/KEBUN">PANTAI/TANAH LAPANG/KEBUN</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-top">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Foto Rumah</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <div class="card3 1">
  <div class="card_image"> 
    
  <?php
  if($dataout['foto']==''){
  ?>  
  <img src="app/images/no-image.png" width="3100%" height=330" /> 
<?php
}else{
?>
<img src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['foto'];?>" /> 
<?php
}
?>
</div>
  <div class="card_title title-white">
    <p>Foto Tampak Depan</p>
  </div>
</div><br><small><div style="color:red;"> Silahkan pilih browse untuk merubah foto</div></small> 
                                                            <input type="file" class="form-control" id="foto" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-top">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Lokasi Rumah</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap"><small><div style="color:red;"> Silahkan geser pointing marker untuk merubah lokasi</div></small> 
                                                            <div id="map1"></div><br>
                                                            <label class="form-label" for="site-name">Latitude</label>
                                                            <input type="text" style="background-color: yellow;" class="form-control" id="latitude" value="<?php echo $dataout['latitude'];?>"><br>
                                                            <label class="form-label" for="site-name">Longitude</label>
                                                            <input type="text" style="background-color: yellow;" class="form-control" id="longitude" value="<?php echo $dataout['latitude'];?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ----------------------------------------------------------------------- -->
                                                <div class="row g-3">
                                                    <div class="col-lg-7 offset-lg-3">
                                                        <div class="form-group mt-2">
                                                            <button type="button" class="btn btn-lg btn-primary simpan"><em class="icon ni ni-save"></em> Update Pendataan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>



                                        </div>
                                    </div><!-- .card-preview -->
                                </div> <!-- nk-block -->
                                  
                                    
                                <!-- ------------------------------------------------------------------------------- -->    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
