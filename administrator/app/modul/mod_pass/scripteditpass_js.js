<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var username = $("#username").val();
        var myPassword = $("#myPassword").val();
      
       
       

         if (myPassword == ''){
            document.getElementById("myPassword").focus();
            swal.fire("", "Password Tidak Boleh Kosong", "error");  


         }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_pass/main_act.php?module=pass&act=edit",  
                     method:"POST",  
                     data:{username:username,myPassword:myPassword},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                       
                        
                        swal.fire({
                            title: 'Simpan Sukses',
                            text: "Password Anda Telah Berhasil Dirubah",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonText: 'OK',
                            cancelButtonText: "",
                              }).then(function (result) {
                                  if (result.value) {
                                    $('#myPassword').val('');
                                    window.location.href = 'rubahpass';
                         
                                } 
                          
                              });
                                       
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