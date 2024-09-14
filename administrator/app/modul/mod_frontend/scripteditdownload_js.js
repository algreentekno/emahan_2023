<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
      
          var judul = $("#judul1").val();
          var id_kategoridownload = $("#id_kategoridownload1").val();
          

          var formData = new FormData();
          var files = $('#nama_file1')[0].files[0];
          formData.append('file',files);
          formData.append('judul', $('#judul1').val());
          formData.append('id_kategoridownload', $('#id_kategoridownload1').val());
          formData.append('id_download', $('#id_download1').val());
       

          if (judul == ''){
               document.getElementById("judul1").focus();
               swal.fire("", "Judul Tidak Boleh Kosong", "error"); 
           
   
           }else if (id_kategoridownload == ''){
             document.getElementById("id_kategoridownload1").focus();
             swal.fire("", "Kategori Tidak Boleh Kosong", "error");  
   
   
          }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=download&act=edit",  
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
                        $('#judul1').val('');
                        $('#nama_file1').val('');
                        $("#id_kategoridownload1").val('').trigger('change');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportdownload').DataTable().ajax.reload(); 
                       
						                
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