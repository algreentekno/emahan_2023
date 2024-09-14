<script>  
 $(document).ready(function(){  
      $('.editsampah').click(function(){  
    
         var kode_kota = $("#kode_kota1s").val();
         var capai1 = $("#capai11s").val();
         var capai2 = $("#capai21s").val();
         var capai3 = $("#capai31s").val();
         var capai4 = $("#capai41s").val();
         var capai5 = $("#capai51s").val();
        
         var formData = new FormData();
         formData.append('kode_kota', $('#kode_kota1s').val());
         formData.append('capai1', $('#capai11s').val());
         formData.append('capai2', $('#capai21s').val());
         formData.append('capai3', $('#capai31s').val());
         formData.append('capai4', $('#capai41s').val());
         formData.append('capai5', $('#capai51s').val());
        formData.append('Id_sampah_akses_target', $('#Id_sampah_akses_target1s').val());
        
        
        if (kode_kota == ''){
         document.getElementById("kode_kota1s").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (capai1 == ''){
        document.getElementById("capai11s").focus();
        swal.fire("", "Timbulan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai2 == ''){
        document.getElementById("capai21s").focus();
        swal.fire("", "Penanganan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai3 == ''){
        document.getElementById("capai31s").focus();
        swal.fire("", "Prosentase Penanganan (%)  Tidak Boleh Kosong", "error");  


     }else if (capai4 == ''){
        document.getElementById("capai41s").focus();
        swal.fire("", "Pengurangan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai5 == ''){
        document.getElementById("capai51s").focus();
        swal.fire("", "Prosentase Pengurangan (%)  Tidak Boleh Kosong", "error");  


     }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_adminprov/main_act.php?module=targetsampah&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("","Capaian Untuk Tahun Data ini Sudah Diinput", "error");
                        }else{
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota1s").val('').trigger('change');
                        $('#capai11s').val('');
                        $('#capai21s').val('');
                        $('#capai31s').val('');
                        $('#capai41s').val('');
                        $('#capai51s').val('');
                        $('#modaleditsampah').modal('hide');
                        $('.datatable-init-exportaksessampahtargetprov').DataTable().ajax.reload(); 
                        }
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".editsampah").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  