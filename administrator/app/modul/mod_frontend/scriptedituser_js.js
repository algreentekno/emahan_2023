<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
       
          
         
          var nip = $("#nip1").val();
          var nama_lengkap = $("#nama_lengkap1").val();
         

          var formData = new FormData();
          formData.append('nip', $('#nip1').val());
          formData.append('nama_lengkap', $('#nama_lengkap1').val());
          formData.append('email', $('#email1').val());
          formData.append('no_telp', $('#no_telp1').val());
          formData.append('username', $('#username1').val());
          formData.append('password', $('#password1').val());
          formData.append('blokir', $('#blokir1').val());
     
  
           if (nip == ''){
            document.getElementById("nip1").focus();
            swal.fire("", "NIK Pegawai Tidak Boleh Kosong", "error"); 
        
  
        }else if (nama_lengkap == ''){
         document.getElementById("nama_lengkap1").focus();
         swal.fire("", "Nama Pegawai Tidak Boleh Kosong", "error"); 
     

     }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=user&act=edit",  
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
                        $('#nip1').val('');
                        $('#nama_lengkap1').val(''); 
                        $('#email1').val(''); 
                        $('#no_telp1').val('');
                        $('#username1').val('');
                        $('#password1').val('');
                        $("#level1").val('').trigger('change');
                        $("#kode_kota1").val('').trigger('change');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportusermanager').DataTable().ajax.reload(); 
                        
                     
						                
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