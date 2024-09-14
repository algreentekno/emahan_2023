<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       
        var nama_link = $("#nama_link").val();
        var url = $("#url").val();
       

        if (nama_link == ''){
            document.getElementById("nama_link").focus();
            swal.fire("", "Nama Link Tidak Boleh Kosong", "error"); 
        

        }else if (url == ''){
          document.getElementById("url").focus();
          swal.fire("", "URL Tidak Boleh Kosong", "error"); 
      

      }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=link&act=add",  
                     method:"POST",  
                     data:{nama_link:nama_link,url:url},
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                       
                        swal.fire("","Simpan Sukses", "success");
                        $('#nama_link').val('');
                        $('#url').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportlink').DataTable().ajax.reload(); 
                        
                     
						                
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