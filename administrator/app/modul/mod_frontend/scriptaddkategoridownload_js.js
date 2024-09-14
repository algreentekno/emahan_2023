<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       
        var nama_kategori = $("#nama_kategori").val();
       

        if (nama_kategori == ''){
            document.getElementById("nama_kategori").focus();
            swal.fire("", "Nama Kategori Tidak Boleh Kosong", "error"); 
        

        }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=kategoridownload&act=add",  
                     method:"POST",  
                     data:{nama_kategori:nama_kategori},
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("", "Nama Kategori Sudah Ada", "error");
                           }else{
                        swal.fire("","Simpan Sukses", "success");
                        $('#nama_kategori').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportkategoridownload').DataTable().ajax.reload(); 
                        }
                     
						                
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