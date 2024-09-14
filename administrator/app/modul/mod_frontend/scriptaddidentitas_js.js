<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
        var nama_website = $("#nama_website").val();
        var url = $("#url").val();
        var meta_keyword = $("#meta_keyword").val();
        var meta_deskripsi = $("#meta_deskripsi").val();
        var email = $("#email").val();
        var alamat = $("#alamat").val();
        var no_telp = $("#no_telp").val();

            var formData = new FormData();
            formData.append('nama_website', $('#nama_website').val());
            formData.append('url', $('#url').val());
            formData.append('meta_keyword', $('#meta_keyword').val());
            formData.append('meta_deskripsi', $('#meta_deskripsi').val());
            formData.append('email', $('#email').val());
            formData.append('alamat', $('#alamat').val());
            formData.append('no_telp', $('#no_telp').val());
       

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
                     url:"app/modul/mod_frontend/main_act.php?module=identitas&act=add",  
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
                        $('#nama_website').val('');
                        $('#url').val('');
                        $('#email').val('');
                        $('#meta_keyword').val('');
                        $('#meta_deskripsi').val('');
                        $('#alamat').val('');
                        $('#no_telp').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportidentitas').DataTable().ajax.reload(); 
                        
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".tambah").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
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