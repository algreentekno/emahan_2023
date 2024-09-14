<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
        var kode_kota = $("#kode_kota").val();
        var nama_kota = $("#nama_kota").val();
       

        if (kode_kota == ''){
            document.getElementById("kode_kota").focus();
            swal.fire("", "Kode Kabupaten/Kota Tidak Boleh Kosong", "error"); 
        

        }else if (nama_kota == ''){
            document.getElementById("nama_kota").focus();
            swal.fire("", "Nama Kabupaten/Kota Tidak Boleh Kosong", "error");  


         }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=kab&act=add",  
                     method:"POST",  
                     data:{kode_kota:kode_kota,nama_kota:nama_kota},
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("", "Kode Kabupaten/Kota Sudah Ada", "error");
                           }else{
                        swal.fire("","Simpan Sukses", "success");
                        $('#kode_kota').val('');
                        $('#nama_kota').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportkab').DataTable().ajax.reload(); 
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