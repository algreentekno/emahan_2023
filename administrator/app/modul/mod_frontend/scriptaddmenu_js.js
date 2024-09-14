<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       
        var nama_menu = $("#nama_menu").val();
        var link = $("#link").val();
        var id_parent = $("#id_parent").val();
       

        if (nama_menu == ''){
            document.getElementById("nama_menu").focus();
            swal.fire("", "Nama Menu Tidak Boleh Kosong", "error"); 
        

        }else if (link == ''){
          document.getElementById("link").focus();
          swal.fire("", "Link Menu Tidak Boleh Kosong", "error"); 
      

      }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=menu&act=add",  
                     method:"POST",  
                     data:{nama_menu:nama_menu,link:link,id_parent:id_parent},
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                       
                        swal.fire("","Simpan Sukses", "success");
                        $('#nama_menu').val('');
                        $('#link').val('');
                        $("#id_parent").val('').trigger('change');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportmenu').DataTable().ajax.reload(); 
                        
                     
						                
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