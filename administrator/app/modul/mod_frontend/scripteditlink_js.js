<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var nama_link = $("#nama_link1").val();
        var url = $("#url1").val();
        var id_link = $("#id_link1").val();
       
       

         if (nama_link == ''){
            document.getElementById("nama_link1").focus();
            swal.fire("", "Nama Link Tidak Boleh Kosong", "error");  


         }else if (url == ''){
          document.getElementById("url1").focus();
          swal.fire("", "URL Tidak Boleh Kosong", "error"); 
      

      }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=link&act=edit",  
                     method:"POST",  
                     data:{nama_link:nama_link,url:url,id_link:id_link},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#nama_link1').val('');
                        $('#url1').val('');  
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportlink').DataTable().ajax.reload(); 
                        
                     
						                
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