<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
          

          var formData = new FormData();
          var files = $('#files1')[0].files[0];
          formData.append('file',files);
          formData.append('Id', $('#Id_kumuh_luas1').val());
          
         
                $.ajax({  
                     url:"app/modul/mod_kumuh/main_act.php?module=kumuh&act=edit1",  
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
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportkumuhdibawah10ha').DataTable().ajax.reload(); 
                       
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".edit").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
            
      }) 
	  
	  
 })  
 
 </script>  