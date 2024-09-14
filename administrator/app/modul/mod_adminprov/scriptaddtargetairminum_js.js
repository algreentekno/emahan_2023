<script>  
 $(document).ready(function(){  
      $('.tambahairminum').click(function(){  
    
        var kode_kota = $("#kode_kota29").val();
        var capai1 = $("#capai129").val();
        var capai3 = $("#capai329").val();
        var capai5 = $("#capai529").val();
        var capai7 = $("#capai729").val();
       
        var formData = new FormData();
        formData.append('kode_kota', $('#kode_kota29').val());
        formData.append('capai1', $('#capai129').val());
        formData.append('capai3', $('#capai329').val());
        formData.append('capai5', $('#capai529').val());
        formData.append('capai7', $('#capai729').val());
       
        
        if (kode_kota == ''){
         document.getElementById("kode_kota29").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (capai1 == ''){
        document.getElementById("capai129").focus();
        swal.fire("", "Akses Layak (%)  Tidak Boleh Kosong", "error");  


     }else if (capai3 == ''){
        document.getElementById("capai329").focus();
        swal.fire("", "Jaringan Perpipaan (%)  Tidak Boleh Kosong", "error");  


     }else if (capai5 == ''){
        document.getElementById("capai529").focus();
        swal.fire("", "Jaringan Non Perpipaan (%)  Tidak Boleh Kosong", "error");  


     }else if (capai7 == ''){
      document.getElementById("capai729").focus();
      swal.fire("", "Aman (%)  Tidak Boleh Kosong", "error");  


   }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_adminprov/main_act.php?module=targetairminum&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".tambahairminum").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("","Target Untuk Tahun Data ini Sudah Diinput", "error");
                        }else{
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota29").val('').trigger('change');
                        $('#capai129').val('');
                        $('#capai329').val('');
                        $('#capai529').val('');
                        $('#capai729').val('');
                        $('#modaltambahairminum').modal('hide');
                        $('.datatable-init-exporttargetprov').DataTable().ajax.reload(); 
                        }
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".tambahairminum").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  