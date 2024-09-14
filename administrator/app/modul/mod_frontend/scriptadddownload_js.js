<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
   
        var judul = $("#judul").val();
        var id_kategoridownload = $("#id_kategoridownload").val();
        var nama_file = $("#nama_file").val();
       
       
        var formData = new FormData();
        var files = $('#nama_file')[0].files[0];
        formData.append('file',files);
        formData.append('judul', $('#judul').val());
        formData.append('id_kategoridownload', $('#id_kategoridownload').val());
       

        

        if (judul == ''){
            document.getElementById("judul").focus();
            swal.fire("", "Judul Tidak Boleh Kosong", "error"); 
        

        }else if (id_kategoridownload == ''){
          document.getElementById("id_kategoridownload").focus();
          swal.fire("", "Nama Kategori Tidak Boleh Kosong", "error");  


       }else if (nama_file == ''){
          document.getElementById("nama_file").focus();
          swal.fire("", "Nama File Tidak Boleh Kosong", "error");  


       }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=download&act=add",  
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
                        $("#id_kategoridownload").val('').trigger('change');
                        $('#nama_file').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportdownload').DataTable().ajax.reload(); 
                        
                     
						                
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