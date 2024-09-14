<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
   
        var judul = $("#jdl_galeri").val();
        var id_album = $("#id_album").val();
       
       
        var formData = new FormData();
        formData.append('judul', $('#jdl_galeri').val());
        formData.append('id_album', $('#id_album').val());
        formData.append('rdm', $('#rdm').val());
        

        if (judul == ''){
            document.getElementById("jdl_galeri").focus();
            swal.fire("", "Judul  Tidak Boleh Kosong", "error"); 
        

        }else if (id_album == ''){
          document.getElementById("id_album").focus();
          swal.fire("", "Nama Album Tidak Boleh Kosong", "error");  


       }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=galeri&act=add",  
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
                        $('#jdl_galeri').val('');
                        $("#id_album").val('').trigger('change');
                        $('#rdm').val('');
                        $('#modaltambah').modal('hide');
                        window.location.href = 'galeri';
                        
                     
						                
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