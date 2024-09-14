<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
          tinyMCE.triggerSave();

          var judul = $("#judul1").val();
          var isi_halaman = $(".isi_halaman1").val();
          

          var formData = new FormData();
          formData.append('judul', $('#judul1').val())
          formData.append('isi_halaman', $('.isi_halaman1').val());
          formData.append('id_halaman', $('#id_halaman1').val());
          

          if (judul == ''){
               document.getElementById("judul1").focus();
               swal.fire("", "Judul Halaman Tidak Boleh Kosong", "error"); 
           
   
           }else if (isi_halaman == ''){
             document.getElementsByClassName("isi_halaman1").focus();
             swal.fire("", "Detail Halaman Tidak Boleh Kosong", "error");  
   
   
          }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=halaman&act=edit",  
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
                        $('.isi_halaman1').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exporthalaman').DataTable().ajax.reload(); 
                       
						                
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