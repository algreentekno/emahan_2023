<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var id = $("#id1").val();
        var nama_kota = $("#nama_kota1").val();
       

         if (nama_kota == ''){
            document.getElementById("nama_kota").focus();
            swal.fire("", "Nama Kabupaten Tidak Boleh Kosong", "error");  


         }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=kab&act=edit",  
                     method:"POST",  
                     data:{id:id,nama_kota:nama_kota},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#kode_kota1').val('');
                        $('#nama_kota1').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportkab').DataTable().ajax.reload(); 
                        
                     
						                
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