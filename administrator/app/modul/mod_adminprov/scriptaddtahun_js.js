<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       
          var tahun_data = $("#tahun_data").val();

        if (tahun_data == ''){
            document.getElementById("tahun_data").focus();
            swal.fire("", "Tahun data Tidak Boleh Kosong", "error"); 
        

        }
           else  
           {  
                $.ajax({  
                    url:"app/modul/mod_adminprov/main_act.php?module=tahundata&act=add",   
                     method:"POST",  
                     data:{tahun_data:tahun_data},
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                       
                        swal.fire("","Simpan Sukses", "success");
                        $('#tahun_data').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exporttahundata').DataTable().ajax.reload(); 
                        
                     
						                
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