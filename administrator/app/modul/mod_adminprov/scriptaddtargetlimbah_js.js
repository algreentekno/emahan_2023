<script>  
 $(document).ready(function(){  
      $('.tambahlimbah').click(function(){  
    
        var kode_kota = $("#kode_kota1").val();
        var capai1 = $("#capai11").val();
        var capai2 = $("#capai21").val();
        var capai3 = $("#capai31").val();
        var capai4 = $("#capai41").val();
        var capai5 = $("#capai51").val();
        var capai6 = $("#capai61").val();
       
        var formData = new FormData();
        formData.append('kode_kota', $('#kode_kota1').val());
        formData.append('capai1', $('#capai11').val());
        formData.append('capai2', $('#capai21').val());
        formData.append('capai3', $('#capai31').val());
        formData.append('capai4', $('#capai41').val());
        formData.append('capai5', $('#capai51').val());
        formData.append('capai6', $('#capai61').val());
        
        if (kode_kota == ''){
         document.getElementById("kode_kota1").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (capai1 == ''){
        document.getElementById("capai11").focus();
        swal.fire("", "Capaian Akes Aman (%)  Tidak Boleh Kosong", "error");  


     }else if (capai2 == ''){
        document.getElementById("capai21").focus();
        swal.fire("", "Capaian Akes Sanitasi Layak Sendiri (%)  Tidak Boleh Kosong", "error");  


     }else if (capai3 == ''){
        document.getElementById("capai31").focus();
        swal.fire("", "Capaian Akes Sanitasi Layak Bersama (%)  Tidak Boleh Kosong", "error");  


     }else if (capai4 == ''){
        document.getElementById("capai41").focus();
        swal.fire("", "Capaian Akes Sanitasi Belum Layak (%)  Tidak Boleh Kosong", "error");  


     }else if (capai5 == ''){
        document.getElementById("capai51").focus();
        swal.fire("", "Capaian BABS Tertutup (%)  Tidak Boleh Kosong", "error");  


     }else if (capai6 == ''){
        document.getElementById("capai61").focus();
        swal.fire("", "Capaian BABS Terbuka (%)  Tidak Boleh Kosong", "error");  


     }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_adminprov/main_act.php?module=targetlimbah&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".tambahlimbah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("","Target Untuk Tahun Data ini Sudah Diinput", "error");
                        }else{
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota1").val('').trigger('change');
                        $('#capai11').val('');
                        $('#capai21').val('');
                        $('#capai31').val('');
                        $('#capai41').val('');
                        $('#capai51').val('');
                        $('#capai61').val('');
                        $('#modaltambahlimbah').modal('hide');
                        $('.datatable-init-exportakseslimbahtargetprov').DataTable().ajax.reload(); 
                        }
                     
						                
                     }, error: function(data){
						         
                    swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $(".tambahlimbah").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
           }  
      }) 
	  
	  
 })  
 
 </script>  