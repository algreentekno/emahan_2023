<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Input Pendataan Kumuh</span></a></div></p>
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
                                                            <select class="form-select js-select2" data-ui="md" id="kode_kota" data-search="on">
    <option value=""></option>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
    while ($jml=mysqli_fetch_array($tampil)){
    ?>
    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
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
                                                            <label class="form-label" for="site-name">Kecamatan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <select class="form-select js-select2" data-ui="md" id="kode_kec" data-search="on">
    <option value=""></option>
</select>
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
                                                            <select class="form-select js-select2" data-ui="md" id="kode_kel" data-search="on">
    <option value=""></option>
</select>
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
                                                                <input type="text" class="form-control" id="no_ktp" value="" minlength="16" maxlength="16" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
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
                                                                <input type="text" class="form-control" id="nama_kk" value="">
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
                                                                <input type="text" class="form-control" id="no_hp" value="" minlength="10" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
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
                                                            <select class="form-select" id="jenis_kelamin">
                                                            <option value=""> Pilih Jenis Kelamin </option>
                                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                                        <option value="Perempuan">Perempuan</option>
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
                                                            <textarea class="form-control no-resize" id="alamat_rumah"></textarea>
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
                                                            <select class="form-select" id="pekerjaan">
                                                            <option value=""> Pilih Jenis Pekerjaan </option>
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
                                                            <select class="form-select" id="penghasilan">
                                                            <option value=""> Pilih Penghasilan </option>
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
                                                            <select class="form-select" id="sts_kepemilikan_rumah">
                                                            <option value=""> Pilih Status Kepemilikan Rumah </option>
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
                                                            <select class="form-select" id="aset_rumah">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="sts_kepemilikan_tanah">
                                                            <option value=""> Pilih Status Kepemilikan Tanah </option>
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
                                                            <select class="form-select js-select2" multiple="multiple" id="jenis_kawasan">
                                                          
                                                            <option value=""> Pilih Jenis Kawasan </option>
                                                                        <option value="KUMUH">KUMUH</option>
                                                                        
                                                                    
                                                                    </select>
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
                                                            <select class="form-select" id="material_pondasi">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="material_kolom">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="material_rangka_atap">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="material_plafon">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="material_balok">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="sloof">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="jendela">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="ventilasi">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="kondisi_lantai">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="material_lantai">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="kondisi_dinding">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="material_dinding">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="kondisi_atap">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="material_atap">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                                <input type="text" class="form-control" id="luas_rumah" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
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
                                                                <input type="text" class="form-control" id="jumlah_penghuni" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="1" maxlength="3">
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
                                                            <select class="form-select" id="sumber_air_minum">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="jarak_tinja">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="jamban">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="jenis_kloset">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <select class="form-select" id="jenis_tpa_tinja">
                                                            <option value=""> Pilih Salah Satu </option>
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
                                                            <input type="file" class="form-control" id="foto" value="">
                                                            </div>
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
                                                            <div id="map"></div><br>
                                                            <label class="form-label" for="site-name">Latitude</label>
                                                            <input type="text" class="form-control" id="latitude" value=""><br>
                                                            <label class="form-label" for="site-name">Longitude</label>
                                                            <input type="text" class="form-control" id="longitude" value="">
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ----------------------------------------------------------------------- -->
                                                <div class="row g-3">
                                                    <div class="col-lg-7 offset-lg-3">
                                                        <div class="form-group mt-2">
                                                            <button type="button" class="btn btn-lg btn-primary simpan"><em class="icon ni ni-save"></em> Simpan Pendataan</button>
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
