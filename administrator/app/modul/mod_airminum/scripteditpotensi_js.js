<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
         
          var kode_kota = $("#kode_kota1").val();
          var kode_kec = $("#kode_kec1").val();
          var kode_kel = $("#kode_kel1").val();
          var nama_sumber_air = $("#nama_sumber_air1").val();
          var debit = $("#debit1").val();        
          var latitude = $("#latitude1").val();
          var longitude = $("#longitude1").val();
          

          var formData = new FormData();
          var files = $('#foto1')[0].files[0];
          formData.append('foto',files);
          formData.append('nama_sumber_air', $('#nama_sumber_air1').val());
          formData.append('debit', $('#debit1').val());
          formData.append('latitude', $('#latitude1').val());
          formData.append('longitude', $('#longitude1').val());
          formData.append('id_air_baku', $('#Id_air_baku1').val());
          
       

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
                     url:"app/modul/mod_airminum/main_act.php?module=potensi&act=edit",  
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
                        $('#nama_sumber_air1').val('');
                        $('#debit1').val('');
                        $('#foto1').val('');
                        $('#latitude1').val('');
                        $('#longitude1').val('');
                        $("#kode_kota1").val('').trigger('change');
                        $("#kode_kec1").val('').trigger('change');
                        $("#kode_kel1").val('').trigger('change');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportpotensiairbaku').DataTable().ajax.reload(); 
                       
						                
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