<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from rtlh where Id_rtlh='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<script>  
 $(document).ready(function(){  
$("#fupload").change(function(){
               var allowedTypes = ['application/pdf'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("", "Silakan pilih file yang valid (PDF)", "error"); 
                   $("#fupload").val('');
                   return false;
               }else if(ukuranfile > 2000000 ){

                  swal.fire("", "Ukuran File Kebesaran, Maksimal 2 MB", "error"); 
                  $("#fupload").val('');
                  return false;

}
           });

})  
 </script> 
 		<script>  
 $(document).ready(function(){  
$("#fupload1").change(function(){
               var allowedTypes = ['application/pdf'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("", "Silakan pilih file yang valid (PDF)", "error"); 
                   $("#fupload1").val('');
                   return false;
               }else if(ukuranfile > 2000000 ){

                  swal.fire("", "Ukuran File Kebesaran, Maksimal 2 MB", "error"); 
                  $("#fupload1").val('');
                  return false;

}
           });

})  
 </script> 	
 		<script>  
 $(document).ready(function(){  
$("#fupload2").change(function(){
               var allowedTypes = ['application/pdf'];
               var file = this.files[0];
               var fileType = file.type;
			   var ukuranfile=file.size;
               if(!allowedTypes.includes(fileType)){
                   
				   swal.fire("", "Silakan pilih file yang valid (PDF)", "error"); 
                   $("#fupload2").val('');
                   return false;
               }else if(ukuranfile > 2000000 ){

                  swal.fire("", "Ukuran File Kebesaran, Maksimal 2 MB", "error"); 
                  $("#fupload2").val('');
                  return false;

}
           });

})  
 </script> 	
<input type="hidden" class="form-control" id="Id_rtlh" value="<?php echo $dataout['Id_rtlh'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nomor. KTP</label>
    <div class="form-control-wrap">
    <input type="hidden" class="form-control" id="no_ktp" value="<?php echo $dataout['no_ktp'];?>">
    <input type="text" class="form-control" id="no_ktp" value="<?php echo $dataout['no_ktp'];?>" readonly >
                                                                 </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kepala Keluarga</label>
    <div class="form-control-wrap">
    <input type="text" class="form-control" id="nama_kepala_keluarga" value="<?php echo $dataout['nama_kk'];?>" readonly>
   
                                                                 </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Alamat</label>
    <div class="form-control-wrap">
    <textarea class="form-control" id="alamat" disabled><?php echo $dataout['alamat_rumah'];?></textarea>
   
                                                                 </div>
</div>
<!-- ==================================================================== -->
<div class="form-group">
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
                                               
</div>     
<div class="form-group">
    <label class="form-label" for="default-01">Upload Saldo Rekening</label>
    <div class="form-control-wrap">
        <input type="file" class="form-control" id="fupload">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Upload Bukti Pembelian Material</label>
    <div class="form-control-wrap">
        <input type="file" class="form-control" id="fupload1">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Upload Foto Renovasi Rumah 100%</label>
    <div class="form-control-wrap">
        <input type="file" class="form-control" id="fupload2">
    </div>
</div>

<!-- ----------------------------------------------------------------------------------------------------------- -->
<div class="form-group">
    <label class="form-label" for="default-01">Sumber Dana</label>
    <div class="form-control-wrap">
    <select class="form-select" id="sumber_dana">
                                                            <option value=""> Pilih Salah Satu </option>
                                                            <option value="APBN">APBN</option>
                                                            <option value="APBD I">APBD I</option>
                                                            <option value="APBD II">APBD II</option>
                                                            <option value="BAZNAS">BAZNAS</option>
                                                            <option value="SWADAYA">SWADAYA</option>
                                                            <option value="LAINNYA">LAINNYA</option>
                                                                    </select>
                                                                 </div>
</div>
<!--<div class="form-group">
    <label class="form-label" for="default-01">Bentuk Bantuan</label>
    <div class="form-control-wrap">
    <select class="form-select" id="bentuk_bantuan">
                                                            <option value=""> Pilih Salah Satu </option>
                                                            <option value="UANG">UANG</option>
                                                            <option value="MATERIAL">MATERIAL</option>
                                                                   </select>
                                                                 </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nilai Bantuan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nilai_bantuan" placeholder="" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>-->
<div class="form-group">
    <label class="form-label" for="default-01">Tahun Bantuan</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="tahun_dibantu" placeholder="" value="" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>


