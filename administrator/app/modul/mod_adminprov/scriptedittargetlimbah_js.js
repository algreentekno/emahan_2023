<script>  
 $(document).ready(function(){  
      $('.editlimbah').click(function(){  
    
        var kode_kota = $("#kode_kota111").val();
        var capai1 = $("#capai1111").val();
        var capai2 = $("#capai2111").val();
        var capai3 = $("#capai3111").val();
        var capai4 = $("#capai4111").val();
        var capai5 = $("#capai5111").val();
        var capai6 = $("#capai6111").val();
       
        var formData = new FormData();
        formData.append('kode_kota', $('#kode_kota111').val());
        formData.append('capai1', $('#capai1111').val());
        formData.append('capai2', $('#capai2111').val());
        formData.append('capai3', $('#capai3111').val());
        formData.append('capai4', $('#capai4111').val());
        formData.append('capai5', $('#capai5111').val());
        formData.append('capai6', $('#capai6111').val());
        formData.append('Id_limbah_akses_target', $('#Id_limbahakses111').val());
        
        
        if (kode_kota == ''){
         document.getElementById("kode_kota111").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (capai1 == ''){
        document.getElementById("capai1111").focus();
        swal.fire("", "Capaian Akes Aman (%)  Tidak Boleh Kosong", "error");  


     }else if (capai2 == ''){
        document.getElementById("capai2111").focus();
        swal.fire("", "Capaian Akes Sanitasi Layak Sendiri ((%))  Tidak Boleh Kosong", "error");  


     }else if (capai3 == ''){
        document.getElementById("capai3111").focus();
        swal.fire("", "Capaian Akes Sanitasi Layak Bersama ((%))  Tidak Boleh Kosong", "error");  


     }else if (capai4 == ''){
        document.getElementById("capai4111").focus();
        swal.fire("", "Capaian Akes Sanitasi Belum Layak ((%))  Tidak Boleh Kosong", "error");  


     }else if (capai5 == ''){
        document.getElementById("capai5111").focus();
        swal.fire("", "Capaian BABS Tertutup ((%))  Tidak Boleh Kosong", "error");  


     }else if (capai6 == ''){
        document.getElementById("capai6111").focus();
        swal.fire("", "Capaian BABS Terbuka ((%))  Tidak Boleh Kosong", "error");  


     }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_adminprov/main_act.php?module=targetlimbah&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".editlimbah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("","Target Untuk Tahun Data ini Sudah Diinput", "error");
                        }else{
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota111").val('').trigger('change');
                        $('#capai1111').val('');
                        $('#capai2111').val('');
                        $('#capai3111').val('');
                        $('#capai4111').val('');
                        $('#capai5111').val('');
                        $('#capai6111').val('');
                        $('#modaleditlimbah').modal('hide');
                        $('.datatable-init-exportakseslimbahtargetprov').DataTable().ajax.reload(); 
                        }
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".editlimbah").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  