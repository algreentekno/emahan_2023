<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
        var kode_kota = $("#kode_kota").val();
        var capai1 = $("#capai1").val();
        var capai2 = $("#capai2").val();
        var capai3 = $("#capai3").val();
        var capai4 = $("#capai4").val();
        var capai5 = $("#capai5").val();
       
        var formData = new FormData();
        formData.append('kode_kota', $('#kode_kota').val());
        formData.append('capai1', $('#capai1').val());
        formData.append('capai2', $('#capai2').val());
        formData.append('capai3', $('#capai3').val());
        formData.append('capai4', $('#capai4').val());
        formData.append('capai5', $('#capai5').val());
        
        
        if (kode_kota == ''){
         document.getElementById("kode_kota").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (capai1 == ''){
        document.getElementById("capai1").focus();
        swal.fire("", "Timbulan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai2 == ''){
        document.getElementById("capai2").focus();
        swal.fire("", "Penanganan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai3 == ''){
        document.getElementById("capai3").focus();
        swal.fire("", "Prosentase Penanganan (%)  Tidak Boleh Kosong", "error");  


     }else if (capai4 == ''){
        document.getElementById("capai4").focus();
        swal.fire("", "Pengurangan Sampah (TON/Tahun)  Tidak Boleh Kosong", "error");  


     }else if (capai5 == ''){
        document.getElementById("capai5").focus();
        swal.fire("", "Prosentase Pengurangan (%)  Tidak Boleh Kosong", "error");  


     }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_sampah/main_act.php?module=capaian&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("","Capaian Untuk Tahun Data ini Sudah Diinput", "error");
                        }else{
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota").val('').trigger('change');
                        $('#capai1').val('');
                        $('#capai2').val('');
                        $('#capai3').val('');
                        $('#capai4').val('');
                        $('#capai5').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportaksessampahcapaian').DataTable().ajax.reload(); 
                        }
                     
						                
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