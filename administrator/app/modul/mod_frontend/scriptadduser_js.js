<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       
          var kode_kota = $("#kode_kota").val();
          var level = $("#level").val();
          var nip = $("#nip").val();
          var nama_lengkap = $("#nama_lengkap").val();
          var username = $("#username").val();
          var password = $("#password").val();

          var formData = new FormData();
          formData.append('kode_kota', $('#kode_kota').val());
          formData.append('level', $('#level').val());
          formData.append('nip', $('#nip').val());
          formData.append('nama_lengkap', $('#nama_lengkap').val());
          formData.append('email', $('#email').val());
          formData.append('no_telp', $('#no_telp').val());
          formData.append('username', $('#username').val());
          formData.append('password', $('#password').val());
     
           if (kode_kota == ''){
              document.getElementById("kode_kota").focus();
              swal.fire("", "Kabupaten/Kota/Provinsi Tidak Boleh Kosong", "error");  
  
  
           }else if (level == ''){
            document.getElementById("pembuat").focus();
            swal.fire("", "Level Tidak Boleh Kosong", "error"); 
        
  
        }else if (nip == ''){
            document.getElementById("folder").focus();
            swal.fire("", "NIK Pegawai Tidak Boleh Kosong", "error"); 
        
  
        }else if (nama_lengkap == ''){
         document.getElementById("folder").focus();
         swal.fire("", "Nama Pegawai Tidak Boleh Kosong", "error"); 
     

     }else if (username == ''){
      document.getElementById("folder").focus();
      swal.fire("", "Username Tidak Boleh Kosong", "error"); 
  

  }else if (password == ''){
   document.getElementById("folder").focus();
   swal.fire("", "Password Tidak Boleh Kosong", "error"); 


}
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=user&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                           swal.fire("", "Username sudah Sudah Ada", "error");
                          }else if(data==3){
                           swal.fire("", "NIK sudah Sudah Ada", "error");
                          }else{
                        swal.fire("","Simpan Sukses", "success");
                        $('#nip').val('');
                        $('#nama_lengkap').val(''); 
                        $('#email').val(''); 
                        $('#no_telp').val('');
                        $('#username').val('');
                        $('#password').val('');
                        $("#level").val('').trigger('change');
                        $("#kode_kota").val('').trigger('change');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportusermanager').DataTable().ajax.reload(); 
                          }
                     
                     
						                
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