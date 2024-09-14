<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var sumber_dana = $("#sumber_dana").val();
        var tahun_dibantu = $("#tahun_dibantu").val();
        var fupload = $("#fupload").val();
        var fupload1 = $("#fupload1").val();
        var fupload2 = $("#fupload2").val();

            
        var formData = new FormData();
          
          var files = $('#fupload')[0].files[0];
          var files1 = $('#fupload1')[0].files[0];
          var files2 = $('#fupload2')[0].files[0];

          formData.append('gambar',files);
          formData.append('gambar1',files1);
          formData.append('gambar2',files2);

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
          formData.append('sumber_air_minum', $('#sumber_air_minum').val());
          formData.append('jarak_tinja', $('#jarak_tinja').val());
          formData.append('jamban', $('#jamban').val());
          formData.append('jenis_kloset', $('#jenis_kloset').val());
          formData.append('jenis_tpa_tinja', $('#jenis_tpa_tinja').val());
          formData.append('tahun_dibantu', $('#tahun_dibantu').val());
          formData.append('sumber_dana', $('#sumber_dana').val());
          formData.append('Id_rtlh', $('#Id_rtlh').val());
          formData.append('no_ktp', $('#no_ktp').val());
          
    
          if (fupload == ''){
            document.getElementById("fupload").focus();
            swal.fire("", "Upload Saldo Masuk Rekening Tidak Boleh Kosong", "error");  
  
  
         }else if (fupload1 == ''){
            document.getElementById("fupload1").focus();
            swal.fire("", "Upload Bukti Pembelian Material Tidak Boleh Kosong", "error");  
  
  
         }else if (fupload2 == ''){
          document.getElementById("fupload2").focus();
          swal.fire("", "Foto Rumah Renovasi 100% Tidak Boleh Kosong", "error");  
  
  
       }else if (sumber_dana == ''){
          document.getElementById("sumber_dana").focus();
          swal.fire("", "Sumber Dana Tidak Boleh Kosong", "error"); 
        }else if (tahun_dibantu == ''){
          document.getElementById("tahun_dibantu").focus();
          swal.fire("", "Tahun Bantuan Tidak Boleh Kosong", "error");

      }else{


                $.ajax({  
                     url:"app/modul/mod_penanganan/main_act.php?module=penanganan&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#nilai_bantuan').val('');
                        $('#tahun_dibantu').val(''); 
                        $("#sumber_dana").val('').trigger('change');
                        $("#bentuk_bantuan").val('').trigger('change'); 
                        $('#modaledit').modal('hide');
                        $('.datatable-init-penanganan').DataTable().ajax.reload(); 
                        
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".edit").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  

                
            }


         
      }) 
	  
	  
 })  
 
 </script>  