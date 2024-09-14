<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
          var nama_menu = $("#nama_menu1").val();
          var link = $("#link1").val();
          var id_parent = $("#id_parent1").val();
          var id_menu = $("#id_menu1").val();
       
       

          if (nama_menu == ''){
               document.getElementById("nama_menu1").focus();
               swal.fire("", "Nama Menu Tidak Boleh Kosong", "error"); 
           
   
           }else if (link == ''){
             document.getElementById("link1").focus();
             swal.fire("", "Link Menu Tidak Boleh Kosong", "error"); 
         
   
         }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=menu&act=edit",  
                     method:"POST",  
                     data:{nama_menu:nama_menu,link:link,id_parent:id_parent,id_menu:id_menu},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#nama_menu').val('');
                        $('#link').val('');
                        $("#id_parent").val('').trigger('change');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportmenu').DataTable().ajax.reload(); 
                        
                     
						                
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