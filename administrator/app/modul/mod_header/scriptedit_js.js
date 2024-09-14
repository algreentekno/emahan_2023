<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
         

          var judul = $("#judul1").val();
          var alt_gambar = $("#alt_gambar1").val();

          var formData = new FormData();
          var files = $('#gambar1')[0].files[0];
          formData.append('gambar',files);
          formData.append('judul', $('#judul1').val());
          formData.append('alt_gambar', $('#alt_gambar1').val());
          formData.append('id_header', $('#id_header1').val());
          
       

          if (judul == ''){
               document.getElementById("judul1").focus();
               swal.fire("", "Judul Informasi Tidak Boleh Kosong", "error"); 
           
   
           }else if (alt_gambar == ''){
             document.getElementById("alt_gambar1").focus();
             swal.fire("", "Keterangan Gambar Tidak Boleh Kosong", "error");  
   
   
          }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_header/main_act.php?module=header&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#judul1').val('');
                        $('#gambar1').val('');
                        $('#alt_gambar1').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportheader').DataTable().ajax.reload(); 
                       
						                
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