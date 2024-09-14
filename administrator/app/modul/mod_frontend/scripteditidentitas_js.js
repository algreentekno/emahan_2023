<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var nama_website = $("#nama_website1").val();
        var url = $("#url1").val();
        var meta_keyword = $("#meta_keyword1").val();
        var meta_deskripsi = $("#meta_deskripsi1").val();
        var email = $("#email1").val();
        var alamat = $("#alamat1").val();
        var no_telp = $("#no_telp1").val();

            var formData = new FormData();
            formData.append('nama_website', $('#nama_website1').val());
            formData.append('url', $('#url1').val());
            formData.append('meta_keyword', $('#meta_keyword1').val());
            formData.append('meta_deskripsi', $('#meta_deskripsi1').val());
            formData.append('email', $('#email1').val());
            formData.append('alamat', $('#alamat1').val());
            formData.append('no_telp', $('#no_telp1').val());
            formData.append('Id_identitas', $('#Id_identitas1').val());

        if (nama_website == ''){
            document.getElementById("nama_website").focus();
            swal.fire("", "Nama Website Tidak Boleh Kosong", "error"); 
        

        }else if (url == ''){
            document.getElementById("url").focus();
            swal.fire("", "URL Tidak Boleh Kosong", "error");  


         }
         else if (email == ''){
          document.getElementById("email").focus();
          swal.fire("", "Email Tidak Boleh Kosong", "error");  


       }else if (IsEmail(email)==false){
          document.getElementById("email").focus();
          swal.fire("", "Penulisan Email Tidak Sesuai", "error");  


       }
       else if (alamat == ''){
          document.getElementById("alamat").focus();
          swal.fire("", "Alamat Tidak Boleh Kosong", "error");  


       }else if (no_telp == ''){
          document.getElementById("no_telp").focus();
          swal.fire("", "Nomor Telpon Tidak Boleh Kosong", "error");  


       }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=identitas&act=edit",  
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
                        $('#nama_website').val('');
                        $('#url').val('');
                        $('#email').val('');
                        $('#meta_keyword').val('');
                        $('#meta_deskripsi').val('');
                        $('#alamat').val('');
                        $('#no_telp').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportidentitas').DataTable().ajax.reload(); 
                        
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".edit").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
      function IsEmail(email) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(email)) {
            return false;
          }else{
            return true;
          }
        } 
 })  
 </script>  