<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       
          var judul = $("#judul").val();
          var pembuat = $("#pembuat").val();
          var folder = $("#folder").val();
     
         
         
  
           if (judul == ''){
              document.getElementById("judul").focus();
              swal.fire("", "Judul Template Tidak Boleh Kosong", "error");  
  
  
           }else if (pembuat == ''){
            document.getElementById("pembuat").focus();
            swal.fire("", "Pembuat Tidak Boleh Kosong", "error"); 
        
  
        }else if (folder == ''){
            document.getElementById("folder").focus();
            swal.fire("", "Folder Tidak Boleh Kosong", "error"); 
        
  
        }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=template&act=add",  
                     method:"POST",  
                     data:{judul:judul,pembuat:pembuat,folder:folder},
                     
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                       
                        swal.fire("","Simpan Sukses", "success");
                        $('#judul').val('');
                        $('#pembuat').val(''); 
                        $('#folder').val(''); 
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exporttemplate').DataTable().ajax.reload(); 
                        
                     
                     
						                
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