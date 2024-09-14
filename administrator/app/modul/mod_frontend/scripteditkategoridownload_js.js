<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var id_kategori = $("#id_kategoridownload1").val();
        var nama_kategori = $("#nama_kategori1").val();
       

         if (nama_kategori == ''){
            document.getElementById("nama_kategori1").focus();
            swal.fire("", "Nama Kategori Tidak Boleh Kosong", "error");  


         }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=kategoridownload&act=edit",  
                     method:"POST",  
                     data:{id_kategori:id_kategori,nama_kategori:nama_kategori},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#nama_kategori1').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportkategoridownload').DataTable().ajax.reload(); 
                        
                     
						                
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