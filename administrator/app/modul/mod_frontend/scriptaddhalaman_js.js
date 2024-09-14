<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       tinyMCE.triggerSave();

       var judul = $("#judul").val();
       var isi_halaman = $("#isi_halaman").val();
       
        var formData = new FormData();
        formData.append('judul', $('#judul').val());
        formData.append('isi_halaman', $('#isi_halaman').val());
       

        if (judul == ''){
            document.getElementById("judl").focus();
            swal.fire("", "Judul Halaman Tidak Boleh Kosong", "error"); 
        

        }else if (isi_halaman == ''){
          document.getElementById("isi_halaman").focus();
          swal.fire("", "Detail Halaman Tidak Boleh Kosong", "error");  


       }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=halaman&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        
                        swal.fire("","Simpan Sukses", "success");
                        $('#judul').val('');
                        //$('#isi_halaman').val('');
                        tinyMCE.activeEditor.setContent('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exporthalaman').DataTable().ajax.reload(); 
                        
                     
						                
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