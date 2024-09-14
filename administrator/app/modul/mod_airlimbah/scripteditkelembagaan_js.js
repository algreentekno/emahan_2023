<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
         

          var jenis_data = $("#jenis_data1").val();
          var nomor_tanggal = $("#nomor_tanggal1").val();
          var tahun_data = $("#tahun_data1").val();
          

          var formData = new FormData();
          var files = $('#file1')[0].files[0];
          formData.append('file',files);
          formData.append('jenis_data', $('#jenis_data1').val());
          formData.append('nomor_tanggal', $('#nomor_tanggal1').val());
          formData.append('tahun_data', $('#tahun_data1').val());  
          formData.append('id_kelembagaan', $('#id_kelembagaan1').val());
          
       

          if (jenis_data == ''){
               document.getElementById("jenis_data").focus();
               swal.fire("", "Jenis Data Tidak Boleh Kosong", "error"); 
           
   
           }else if (nomor_tanggal == ''){
             document.getElementById("nomor_tanggal").focus();
             swal.fire("", "Nomor Dan Tanggal Tidak Boleh Kosong", "error");  
   
   
          }else if (tahun_data == ''){
             document.getElementById("tahun_data").focus();
             swal.fire("", "Tahun Data  Tidak Boleh Kosong", "error");  
   
   
          }
          
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_airlimbah/main_act.php?module=kelembagaan&act=edit",  
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
                        $('#jenis_data1').val('');
                        $('#nomor_tanggal1').val('');
                        $('#tahun_data1').val('');
                        $('#file1').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportlimbah').DataTable().ajax.reload(); 
                       
						                
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