<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    

        var ket_verifikasi = $("#ket_verifikasi").val();
        var Id_rtlh = $("#Id_rtlh").val();
    

       
                $.ajax({  
                     url:"app/modul/mod_verifikasi/main_act.php?module=verifikasi&act=edit",  
                     method:"POST",  
                     data:{Id_rtlh:Id_rtlh,ket_verifikasi:ket_verifikasi},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                         $("#ket_verifikasi").val('').trigger('change');
                           $('#modaledit').modal('hide');
                        $('.datatable-init-verifikasi').DataTable().ajax.reload(); 
                        
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".edit").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
            
      }) 
	  
	  
 })  
 
 </script>  