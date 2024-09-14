<script>  
 $(document).ready(function(){  
      $('.uploadbukti').click(function(){  
    
      

   
        var fupload = $("#fupload").val();
        var fupload1 = $("#fupload1").val();
        var fupload2 = $("#fupload2").val();
        
       
        var formData = new FormData();
        var files = $('#fupload')[0].files[0];
        var files1 = $('#fupload1')[0].files[0];
        var files2 = $('#fupload2')[0].files[0];

        formData.append('gambar',files);
        formData.append('gambar1',files1);
        formData.append('gambar2',files2);
    
        formData.append('Id_rtlh', $('#Id_rtlh').val());
        

        if (fupload == ''){
          document.getElementById("fupload").focus();
          swal.fire("", "Upload Saldo Masuk Rekening Tidak Boleh Kosong", "error");  


       }else if (fupload1 == ''){
          document.getElementById("fupload1").focus();
          swal.fire("", "Upload Bukti Pembelian Material Tidak Boleh Kosong", "error");  


       }else if (fupload2 == ''){
        document.getElementById("fupload2").focus();
        swal.fire("", "Foto Rumah Renovasi 100% Tidak Boleh Kosong", "error");  


     }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_penanganan/main_act.php?module=bukti&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".uploadbukti").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        
                        swal.fire("","Simpan Sukses", "success");
                        $('#fupload2').val('');
                        $('#fupload').val('');
                        $('#fupload1').val('');
                        $('#modaleditbukti').modal('hide');
                        $('.datatable-init-lihatpenanganan').DataTable().ajax.reload(); 
                        
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".uploadbukti").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  