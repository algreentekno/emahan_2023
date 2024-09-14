<script>  
 $(document).ready(function(){  
      $('.simpan').click(function(){  
         
          var formData = new FormData();
          formData.append('key', $('#key').val());
          
                     $.ajax({  
                     url:"app/modul/mod_pendataan/main_act.php?module=pendataan&act=upload",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".simpan").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 

                        Swal.fire({
                            title: "",
                            text: "Import Data Pendataan Berhasil",
                            icon: 'success',
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: "OK",
                          }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                window.location.href = 'importpendataan';
                            } 
                          });

                                       
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".simpan").html('<em class="icon ni ni-save"></em> Update Pendataan');
                     
                       
                       } 
                }); 
                
            
            
      }) 
	  
	  
 })  
 
 </script>  