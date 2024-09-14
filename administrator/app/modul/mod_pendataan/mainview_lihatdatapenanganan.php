<?php
$key=$_GET['key'];
$sql12= "SELECT sts_penanganan FROM rtlh where sha1(Id_rtlh)='$key'"; 
$hasil12 = mysqli_query($koneksi,$sql12);
$dataout2=mysqli_fetch_array($hasil12);
if($dataout2['sts_penanganan']=='Y'){
$sql1= "SELECT *,
a.no_ktp as no_ktp
,a.material_pondasi as material_pondasi
,a.material_kolom as material_kolom
,a.material_rangka_atap as material_rangka_atap
,a.material_plafon as material_plafon
,a.material_balok as material_balok
,a.sloof as sloof
,a.jendela as jendela
,a.ventilasi as ventilasi
,a.kondisi_lantai as kondisi_lantai
,a.material_lantai as material_lantai
,a.kondisi_dinding as kondisi_dinding
,a.material_dinding as material_dinding
,a.kondisi_atap as kondisi_atap
,a.material_atap as material_atap
,a.sumber_air_minum as sumber_air_minum
,a.jarak_tinja as jarak_tinja
,a.jamban as jamban
,a.jenis_kloset as jenis_kloset
,a.jenis_tpa_tinja as jenis_tpa_tinja
,e.material_pondasi as material_pondasi1
,e.material_kolom as material_kolom1
,e.material_rangka_atap as material_rangka_atap1
,e.material_plafon as material_plafon1
,e.material_balok as material_balok1
,e.sloof as sloof1
,e.jendela as jendela1
,e.ventilasi as ventilasi1
,e.kondisi_lantai as kondisi_lantai1
,e.material_lantai as material_lantai1
,e.kondisi_dinding as kondisi_dinding1
,e.material_dinding as material_dinding1
,e.kondisi_atap as kondisi_atap1
,e.material_atap as material_atap1
,e.sumber_air_minum as sumber_air_minum1
,e.jarak_tinja as jarak_tinja1
,e.jamban as jamban1
,e.jenis_kloset as jenis_kloset1
,e.jenis_tpa_tinja as jenis_tpa_tinja1
 FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota inner join rtlh_penanganan e on a.no_ktp=e.no_ktp where sha1(a.Id_rtlh)='$key' order by a.Id_rtlh"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
}else{
    $sql1= "SELECT * FROM  rtlh a INNER JOIN kelurahan b on a.kode_kel=b.kode_kel INNER JOIN kecamatan c on b.kode_kec=c.kode_kec INNER JOIN kota d on c.kode_kota=d.kode_kota where sha1(a.Id_rtlh)='$key' order by a.Id_rtlh"; 
    $hasil1 = mysqli_query($koneksi,$sql1);
    $dataout=mysqli_fetch_array($hasil1);
}
if($dataout2['sts_penanganan']=='Y'){
?>
<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Lihat Penanganan</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                               
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                        <div align="right" style="margin-bottom: 30px;">
                                       <!-- <a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" href="html/invoice-print.html" target="_blank"><em class="icon ni ni-printer-fill"></em></a> -->
                                    </div>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['no_ktp'];?>" readonly>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kk'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['no_hp'];?>" readonly>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jenis_kelamin'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['pekerjaan'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['penghasilan'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sts_kepemilikan_rumah'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['aset_rumah'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sts_kepemilikan_tanah'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jenis_kawasan'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_pondasi'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Pondasi Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input style="background-color: yellow;" type="text" class="form-control"  value="<?php echo $dataout['material_pondasi1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_kolom'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Kolom Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control" style="background-color: yellow;" value="<?php echo $dataout['material_kolom1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_rangka_atap'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Rangka Atap Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['material_rangka_atap1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_plafon'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Plafon Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['material_plafon1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_balok'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Balok Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['material_balok1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sloof'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">SLOOF Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['sloof1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jendela'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jendela Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['jendela1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['ventilasi'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Ventilasi Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['ventilasi1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['kondisi_lantai'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kondisi Lantai Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['kondisi_lantai1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_lantai'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Lantai Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['material_lantai1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['kondisi_dinding'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kondisi Dinding Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['kondisi_dinding1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_dinding'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Dinding Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['material_dinding1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['kondisi_atap'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kondisi Atap Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['kondisi_atap1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_atap'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Material Atap Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['material_atap1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['luas_rumah'];?> M2" readonly>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jumlah_penghuni'];?>" readonly>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sumber_air_minum'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Sumber Air Minum Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['sumber_air_minum1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jarak_tinja'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jarak SAM-TPA Tinja Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['jarak_tinja1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jamban'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Kamar Mandi Dan Jamban Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['jamban1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jenis_kloset'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jenis Kloset Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['jenis_kloset1'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jenis_tpa_tinja'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Jenis TPA Tinja Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" style="background-color: yellow;" class="form-control"  value="<?php echo $dataout['jenis_tpa_tinja1'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Status Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sts_penanganan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Sumber Dana</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sumber_dana'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Tahun Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['tahun_dibantu'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="row g-3 align-center" style="margin-top: 10px;">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        
                                                          
                                                            <label class="form-label" for="site-name">Foto Rumah</label><br>
                                                           
  
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
</div>
                                                            
                                                       
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center" style="margin-top: 10px;">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <label class="form-label" for="site-name">Lokasi Rumah</label><br>
                                                            <div id="map1"></div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <!-- ----------------------------------------------------------------------- -->
                                               
                                                <div class="row g-3 align-center" style="margin-top: 10px;">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                           

                                                            <div class="form-group">
    <label class="form-label" for="default-01">Upload Saldo Rekening</label>
    <div class="form-control-wrap">
    <embed type="application/pdf" src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['bukti1'];?>" width="100%" height="420"></embed>     

</div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Upload Bukti Pembelian Material</label>
    <div class="form-control-wrap">
    <embed type="application/pdf" src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['bukti2'];?>" width="100%" height="420"></embed>     


</div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Upload Foto Renovasi Rumah 100%</label>
    <div class="form-control-wrap">
        
    <embed type="application/pdf" src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['bukti3'];?>" width="100%" height="420"></embed>     

</div>
</div>


                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                


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
<!-- ------------------------------------------------------------------------------- -->
<?php
}else{
?>
<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Lihat Pendataan</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                               
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                        <div align="right" style="margin-bottom: 30px;">
                                       <!-- <a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" href="html/invoice-print.html" target="_blank"><em class="icon ni ni-printer-fill"></em></a> -->
                                    </div>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['no_ktp'];?>" readonly>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nama_kk'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['no_hp'];?>" readonly>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jenis_kelamin'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['pekerjaan'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['penghasilan'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sts_kepemilikan_rumah'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['aset_rumah'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sts_kepemilikan_tanah'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jenis_kawasan'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_pondasi'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_kolom'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_rangka_atap'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_plafon'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_balok'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sloof'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jendela'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['ventilasi'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['kondisi_lantai'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_lantai'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['kondisi_dinding'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_dinding'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['kondisi_atap'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['material_atap'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['luas_rumah'];?> M2" readonly>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jumlah_penghuni'];?>" readonly>
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sumber_air_minum'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jarak_tinja'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jamban'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jenis_kloset'];?>" readonly>
                                                           
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
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['jenis_tpa_tinja'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                if($dataout['sts_verifikasi']=='Y'){
                                                ?>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Status Verifikasi</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sts_verifikasi'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Keterangan Verifikasi</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['ket_verifikasi'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Tahun Verifikasi</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['tahun_verifikasi'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                                <?php
                                                if($dataout['sts_verifikasi']=='Y' AND $dataout['sts_penanganan']=='Y'){
                                                ?>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Status Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sts_penanganan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Sumber Dana</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['sumber_dana'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Bentuk Bantuan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['bentuk_bantuan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Nilai Bantuan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['nilai_bantuan'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-label" for="site-name">Tahun Penanganan</label>
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <input type="text" class="form-control"  value="<?php echo $dataout['tahun_dibantu'];?>" readonly>
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                                <div class="row g-3 align-center" style="margin-top: 10px;">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        
                                                          
                                                            <label class="form-label" for="site-name">Foto Rumah</label><br>
                                                           
  
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
</div>
                                                            
                                                       
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-center" style="margin-top: 10px;">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            
                                                            <span class="form-note"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                            <label class="form-label" for="site-name">Lokasi Rumah</label><br>
                                                            <div id="map1"></div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ----------------------------------------------------------------------- -->
                                               



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
<!-- ------------------------------------------------------------------------------- -->


<?php
}
?>
