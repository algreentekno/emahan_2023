<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var tahun_data = $("#tahun_data1").val();
        var id_tahun = $("#id_tahun1").val();
       
       

         if (tahun_data == ''){
            document.getElementById("tahun_data1").focus();
            swal.fire("", "Tahun Data Tidak Boleh Kosong", "error");  


         }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_adminprov/main_act.php?module=tahundata&act=edit",  
                     method:"POST",  
                     data:{tahun_data:tahun_data,id_tahun:id_tahun},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#tahun_data1').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exporttahundata').DataTable().ajax.reload(); 
                        
                     
						                
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