<script>  
 $(document).ready(function(){  
      $('.editairminum').click(function(){  
    
        var kode_kota = $("#kode_kota189").val();
        var capai1 = $("#capai1189").val();
        var capai3 = $("#capai3189").val();
        var capai5 = $("#capai5189").val();
        var capai7 = $("#capai7189").val();
       
       
        var formData = new FormData();
        formData.append('kode_kota', $('#kode_kota189').val());
        formData.append('capai1', $('#capai1189').val());
        formData.append('capai3', $('#capai3189').val());
        formData.append('capai5', $('#capai5189').val());
        formData.append('capai7', $('#capai7189').val());
        formData.append('Id_air_capaian_target', $('#Id_air_capaian_target189').val());
        
        
        if (kode_kota == ''){
         document.getElementById("kode_kota189").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (capai1 == ''){
        document.getElementById("capai1189").focus();
        swal.fire("", "Akses Layak (%)  Tidak Boleh Kosong", "error");  


     }else if (capai3 == ''){
        document.getElementById("capai3189").focus();
        swal.fire("", "Jaringan Perpipaan (%)  Tidak Boleh Kosong", "error");  


     }else if (capai5 == ''){
        document.getElementById("capai5189").focus();
        swal.fire("", "Jaringan Non Perpipaan (%)  Tidak Boleh Kosong", "error");  


     }else if (capai7 == ''){
      document.getElementById("capai7189").focus();
      swal.fire("", "Aman (%)  Tidak Boleh Kosong", "error");  


   }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_adminprov/main_act.php?module=targetairminum&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".editairminum").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("","Target Untuk Tahun Data ini Sudah Diinput", "error");
                        }else{
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota189").val('').trigger('change');
                        $('#capai1189').val('');
                        $('#capai3189').val('');
                        $('#capai5189').val('');
                        $('#capai7189').val('');
                        $('#modaleditairminum').modal('hide');
                        $('.datatable-init-exporttargetprov').DataTable().ajax.reload(); 
                        }
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".editairminum").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  