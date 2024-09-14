<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var judul = $("#judul1").val();
        var pembuat = $("#pembuat1").val();
        var folder = $("#folder1").val();
        var id_templates = $("#id_templates1").val();
       
       

         if (judul == ''){
            document.getElementById("judul1").focus();
            swal.fire("", "Judul Template Tidak Boleh Kosong", "error");  


         }else if (pembuat == ''){
          document.getElementById("pembuat1").focus();
          swal.fire("", "Pembuat Tidak Boleh Kosong", "error"); 
      

      }else if (folder == ''){
          document.getElementById("folder1").focus();
          swal.fire("", "Folder Tidak Boleh Kosong", "error"); 
      

      }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=template&act=edit",  
                     method:"POST",  
                     data:{judul:judul,pembuat:pembuat,folder:folder,id_templates:id_templates},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#judul1').val('');
                        $('#pembuat1').val(''); 
                        $('#folder1').val(''); 
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exporttemplate').DataTable().ajax.reload(); 
                        
                     
						                
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