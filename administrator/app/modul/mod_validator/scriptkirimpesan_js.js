<script>  
 $(document).ready(function(){  
      $('.kirimpesan').click(function(){  
    
        tinyMCE.triggerSave();
        
        var kodekota = $("#kodekota").val();
        var jenisdata = $("#jenisdata").val();
        var rdm = $("#rdm").val();
        var isi_pesan = $(".isi_pesan").val();
       
       

         if (isi_pesan == ''){
           
            swal.fire("", "Pesan Tidak Boleh Kosong", "error");  


         }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_validator/main_act.php?module=pesan&act=add",  
                     method:"POST",  
                     data:{kodekota:kodekota,jenisdata:jenisdata,rdm:rdm,isi_pesan:isi_pesan},
                     beforeSend:function(){  
                        $(".kirimpesan").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Pesan Sukses Terkirim", "success");
                        $('.isi_pesan').val('');
                        $('#modalpesan').modal('hide');
                        $('.datatable-init-exportdraftdataval').DataTable().ajax.reload(); 
                        
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Kirim Pesan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".kirimpesan").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  