<script>  
 $(document).ready(function(){  
      $('.simpan').click(function(){  
          var key=$("#key").val();
          var formData = new FormData();
          var files = $('#foto')[0].files[0];
          formData.append('file',files);
          formData.append('latitude', $('#latitude').val());
          formData.append('longitude', $('#longitude').val());
          formData.append('kode_kota', $('#kode_kota').val());
          formData.append('kode_kec', $('#kode_kec').val());
          formData.append('kode_kel', $('#kode_kel').val());
          formData.append('no_ktp', $('#no_ktp').val());
          formData.append('nama_kk', $('#nama_kk').val());
          formData.append('no_hp', $('#no_hp').val());
          formData.append('jenis_kelamin', $('#jenis_kelamin').val());
          formData.append('alamat_rumah', $('#alamat_rumah').val());
          formData.append('pekerjaan', $('#pekerjaan').val());
          formData.append('penghasilan', $('#penghasilan').val());
          formData.append('sts_kepemilikan_rumah', $('#sts_kepemilikan_rumah').val());
          formData.append('aset_rumah', $('#aset_rumah').val());
          formData.append('sts_kepemilikan_tanah', $('#sts_kepemilikan_tanah').val());
          formData.append('jenis_kawasan', $('#jenis_kawasan').val());
          formData.append('material_pondasi', $('#material_pondasi').val());
          formData.append('material_kolom', $('#material_kolom').val());
          formData.append('material_rangka_atap', $('#material_rangka_atap').val());
          formData.append('material_plafon', $('#material_plafon').val());
          formData.append('material_balok', $('#material_balok').val());
          formData.append('sloof', $('#sloof').val());
          formData.append('jendela', $('#jendela').val());
          formData.append('ventilasi', $('#ventilasi').val());
          formData.append('kondisi_lantai', $('#kondisi_lantai').val());
          formData.append('material_lantai', $('#material_lantai').val());
          formData.append('kondisi_dinding', $('#kondisi_dinding').val());
          formData.append('material_dinding', $('#material_dinding').val());
          formData.append('kondisi_atap', $('#kondisi_atap').val());
          formData.append('material_atap', $('#material_atap').val());
          formData.append('luas_rumah', $('#luas_rumah').val());
          formData.append('jumlah_penghuni', $('#jumlah_penghuni').val());
          formData.append('sumber_air_minum', $('#sumber_air_minum').val());
          formData.append('jarak_tinja', $('#jarak_tinja').val());
          formData.append('jamban', $('#jamban').val());
          formData.append('jenis_kloset', $('#jenis_kloset').val());
          formData.append('jenis_tpa_tinja', $('#jenis_tpa_tinja').val());
          //==============================================================
          formData.append('pekerjaan1', $('#pekerjaan1').val());
          formData.append('penghasilan1', $('#penghasilan1').val());
          formData.append('sts_kepemilikan_rumah1', $('#sts_kepemilikan_rumah1').val());
          formData.append('aset_rumah1', $('#aset_rumah1').val());
          formData.append('sts_kepemilikan_tanah1', $('#sts_kepemilikan_tanah1').val());
          formData.append('jenis_kawasan1', $('#jenis_kawasan1').val());
          formData.append('material_pondasi1', $('#material_pondasi1').val());
          formData.append('material_kolom1', $('#material_kolom1').val());
          formData.append('material_rangka_atap1', $('#material_rangka_atap1').val());
          formData.append('material_plafon1', $('#material_plafon1').val());
          formData.append('material_balok1', $('#material_balok1').val());
          formData.append('sloof1', $('#sloof1').val());
          formData.append('jendela1', $('#jendela1').val());
          formData.append('ventilasi1', $('#ventilasi1').val());
          formData.append('kondisi_lantai1', $('#kondisi_lantai1').val());
          formData.append('material_lantai1', $('#material_lantai1').val());
          formData.append('kondisi_dinding1', $('#kondisi_dinding1').val());
          formData.append('material_dinding1', $('#material_dinding1').val());
          formData.append('kondisi_atap1', $('#kondisi_atap1').val());
          formData.append('material_atap1', $('#material_atap1').val());
          formData.append('sumber_air_minum1', $('#sumber_air_minum1').val());
          formData.append('jarak_tinja1', $('#jarak_tinja1').val());
          formData.append('jamban1', $('#jamban1').val());
          formData.append('jenis_kloset1', $('#jenis_kloset1').val());
          formData.append('jenis_tpa_tinja1', $('#jenis_tpa_tinja1').val());
          //===============================================================
          formData.append('Id_rtlh', $('#Id_rtlh').val());
          
                     $.ajax({  
                     url:"app/modul/mod_pendataan/main_act.php?module=pendataan&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".simpan").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 

                        Swal.fire({
                            title: "",
                            text: "Update Data Berhasil",
                            icon: 'success',
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: "OK",
                          }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                window.location.href = 'editpendataan-'+key;
                            } 
                          });

                                       
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".simpan").html('<em class="icon ni ni-save"></em> Update Pendataan');
                     
                       
                       } 
                }); 
                
            
            
      }) 
	  
	  
 })  
 
 </script>  