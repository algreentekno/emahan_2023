<script>  
 $(document).ready(function(){  
      $('.editfoto').click(function(){  
    
          

          var formData = new FormData();
          var files = $('#files')[0].files[0];
          formData.append('file',files);
          formData.append('latitude', $('#latitude').val());
          formData.append('longitude', $('#longitude').val());
          formData.append('Id', $('#Id_sampah_tpst').val());
          
         
                $.ajax({  
                     url:"app/modul/mod_airlimbah/main_act.php?module=tpst&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".editfoto").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportlayanantpst').DataTable().ajax.reload(); 
                       
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".editfoto").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
            
      }) 
	  
	  
 })  
 
 </script>  