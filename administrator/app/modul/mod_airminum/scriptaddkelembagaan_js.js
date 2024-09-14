<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
        var jenis_data = $("#jenis_data").val();
        var nomor_tanggal = $("#nomor_tanggal").val();
        var tahun_data = $("#tahun_data").val();
        var file = $("#file").val();
        var kode_kota = $("#kode_kota").val();
       
        var formData = new FormData();
        var files = $('#file')[0].files[0];
        formData.append('file',files);
        formData.append('jenis_data', $('#jenis_data').val());
        formData.append('nomor_tanggal', $('#nomor_tanggal').val());
        formData.append('tahun_data', $('#tahun_data').val());
        formData.append('kode_kota', $('#kode_kota').val());
        
        if (kode_kota == ''){
         document.getElementById("kode_kota").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (jenis_data == ''){
            document.getElementById("jenis_data").focus();
            swal.fire("", "Jenis Data Tidak Boleh Kosong", "error"); 
        

        }else if (nomor_tanggal == ''){
          document.getElementById("nomor_tanggal").focus();
          swal.fire("", "Nomor Dan Tanggal Tidak Boleh Kosong", "error");  


       }else if (tahun_data == ''){
          document.getElementById("tahun_data").focus();
          swal.fire("", "Tahun Data  Tidak Boleh Kosong", "error");  


       }
       else if (file == ''){
         document.getElementById("file").focus();
         swal.fire("", "File  Tidak Boleh Kosong", "error");  


      }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_airminum/main_act.php?module=kelembagaan&act=add",  
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
                        $('#jenis_data').val('');
                        $('#nomor_tanggal').val('');
                        $('#tahun_data').val('');
                        $('#file').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportkelembagaanairminum').DataTable().ajax.reload(); 
                        
                     
						                
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