<script>  
 $(document).ready(function(){  
      $('.editgaleri').click(function(){  
    
         

          var formData = new FormData();
          var files = $('#gambar1')[0].files[0];
          formData.append('gambar',files);
          formData.append('id_galeridetail', $('#id_galeridetail').val());
          
       
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=galeri&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".editgaleri").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        
                        $('#gambar1').val('');
                        window.location.href = 'galeri';
                    
                       
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".editgaleri").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
            
      }) 
	  
	  
 })  
 
 </script>  