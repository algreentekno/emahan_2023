<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
        var kode_kota = $("#kode_kota").val();
        var kode_kec = $("#kode_kec").val();
        var kode_kel = $("#kode_kel").val();
        var nama_sumber_air = $("#nama_sumber_air").val();
        var debit = $("#debit").val();
        var foto = $("#foto").val();
        var latitude = $("#latitude2").val();
        var longitude = $("#longitude2").val();
      
        var formData = new FormData();
        var files = $('#foto')[0].files[0];
        formData.append('foto',files);
        formData.append('kode_kota', $('#kode_kota').val());
        formData.append('kode_kec', $('#kode_kec').val());
        formData.append('kode_kel', $('#kode_kel').val());
        formData.append('nama_sumber_air', $('#nama_sumber_air').val());
        formData.append('debit', $('#debit').val());
        formData.append('latitude', $('#latitude2').val());
        formData.append('longitude', $('#longitude2').val());
        
        if (kode_kota == ''){
         document.getElementById("kode_kota").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (kode_kec == ''){
            document.getElementById("kode_kec").focus();
            swal.fire("", "Kecamatan Tidak Boleh Kosong", "error"); 
        

        }else if (kode_kel == ''){
          document.getElementById("kode_kel").focus();
          swal.fire("", "Kelurahan/Desa Tidak Boleh Kosong", "error");  


       }else if (nama_sumber_air == ''){
          document.getElementById("nama_sumber_air").focus();
          swal.fire("", "Nama Sumber Air  Tidak Boleh Kosong", "error");  


       }
       else if (debit == ''){
         document.getElementById("debit").focus();
         swal.fire("", "Debit Tidak Boleh Kosong", "error");  


      }else if (foto == ''){
         document.getElementById("foto").focus();
         swal.fire("", "Foto Tidak Boleh Kosong", "error");  


      }
      
      else if (latitude == ''){
         document.getElementById("latitude").focus();
         swal.fire("", "Latitude Tidak Boleh Kosong", "error");  


      }else if (longitude == ''){
         document.getElementById("longitude").focus();
         swal.fire("", "Longitude Tidak Boleh Kosong", "error");  


      }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_airminum/main_act.php?module=potensi&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        
                        swal.fire("","Simpan Sukses", "success");
                        $('#nama_sumber_air').val('');
                        $('#debit').val('');
                        $('#foto').val('');
                        $('#latitude').val('');
                        $('#longitude').val('');
                        $("#kode_kota").val('').trigger('change');
                        $("#kode_kec").val('').trigger('change');
                        $("#kode_kel").val('').trigger('change');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportpotensiairbaku').DataTable().ajax.reload(); 
                        
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".tambah").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  