<script>  
 $(document).ready(function(){  
      $('.tambahsampah').click(function(){  
    
        var kode_kota = $("#kode_kota365").val();
        var capai1 = $("#capai1365").val();
        var capai2 = $("#capai2365").val();
        var capai3 = $("#capai3365").val();
        var capai4 = $("#capai4365").val();
        var capai5 = $("#capai5365").val();
       
        var formData = new FormData();
        formData.append('kode_kota', $('#kode_kota365').val());
        formData.append('capai1', $('#capai1365').val());
        formData.append('capai2', $('#capai2365').val());
        formData.append('capai3', $('#capai3365').val());
        formData.append('capai4', $('#capai4365').val());
        formData.append('capai5', $('#capai5365').val());
        
        
        if (kode_kota == ''){
         document.getElementById("kode_kota365").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (capai1 == ''){
        document.getElementById("capai1365").focus();
        swal.fire("", "Timbulan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai2 == ''){
        document.getElementById("capai2365").focus();
        swal.fire("", "Penanganan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai3 == ''){
        document.getElementById("capai3365").focus();
        swal.fire("", "Prosentase Penanganan (%)  Tidak Boleh Kosong", "error");  


     }else if (capai4 == ''){
        document.getElementById("capai4365").focus();
        swal.fire("", "Pengurangan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai5 == ''){
        document.getElementById("capai5365").focus();
        swal.fire("", "Prosentase Pengurangan (%)  Tidak Boleh Kosong", "error");  


     }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_adminprov/main_act.php?module=targetsampah&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".tambahsampah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("","Target Untuk Tahun Data ini Sudah Diinput", "error");
                        }else{
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota365").val('').trigger('change');
                        $('#capai1365').val('');
                        $('#capai2365').val('');
                        $('#capai3365').val('');
                        $('#capai4365').val('');
                        $('#capai5365').val('');
                        $('#modaltambahsampah').modal('hide');
                        $('.datatable-init-exportaksessampahtargetprov').DataTable().ajax.reload(); 
                        }
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".tambahsampah").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  