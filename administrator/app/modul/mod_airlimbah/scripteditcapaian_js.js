<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var kode_kota = $("#kode_kota1").val();
        var jump1 = $("#jump11").val();
        var jump2 = $("#jump21").val();
        var jump3 = $("#jump31").val();
        var jump4 = $("#jump41").val();
        var capai1 = $("#capai11").val();
        var capai2 = $("#capai21").val();
        var capai3 = $("#capai31").val();
        var capai4 = $("#capai41").val();
        var capai5 = $("#capai51").val();
        var capai6 = $("#capai61").val();
       
        var formData = new FormData();
        formData.append('kode_kota', $('#kode_kota1').val());
        formData.append('jump1', $('#jump11').val());
        formData.append('jump2', $('#jump21').val());
        formData.append('jump3', $('#jump31').val());
        formData.append('jump4', $('#jump41').val());
        formData.append('capai1', $('#capai11').val());
        formData.append('capai2', $('#capai21').val());
        formData.append('capai3', $('#capai31').val());
        formData.append('capai4', $('#capai41').val());
        formData.append('capai5', $('#capai51').val());
        formData.append('capai6', $('#capai61').val());
        formData.append('Id_limbahakses', $('#Id_limbahakses1').val());
        
        
        if (kode_kota == ''){
         document.getElementById("kode_kota1").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (jump1 == ''){
            document.getElementById("jump11").focus();
            swal.fire("", "Jumlah Penduduk (KK) Tidak Boleh Kosong", "error"); 
        

        }else if (jump2 == ''){
          document.getElementById("jump21").focus();
          swal.fire("", "Jumlah Penduduk (JIWA) Tidak Boleh Kosong", "error");  


       }else if (jump3 == ''){
          document.getElementById("jump31").focus();
          swal.fire("", "Jumlah Penduduk Perdesaan (JIWA)  Tidak Boleh Kosong", "error");  


       }
       else if (jump4 == ''){
         document.getElementById("jump41").focus();
         swal.fire("", "Jumlah Pendudk Perkotaan (JIWA)  Tidak Boleh Kosong", "error");  


      }else if (capai1 == ''){
        document.getElementById("capai11").focus();
        swal.fire("", "Capaian Akes Aman (KK)  Tidak Boleh Kosong", "error");  


     }else if (capai2 == ''){
        document.getElementById("capai21").focus();
        swal.fire("", "Capaian Akes Sanitasi Layak Sendiri (KK)  Tidak Boleh Kosong", "error");  


     }else if (capai3 == ''){
        document.getElementById("capai31").focus();
        swal.fire("", "Capaian Akes Sanitasi Layak Bersama (KK)  Tidak Boleh Kosong", "error");  


     }else if (capai4 == ''){
        document.getElementById("capai41").focus();
        swal.fire("", "Capaian Akes Sanitasi Belum Layak (KK)  Tidak Boleh Kosong", "error");  


     }else if (capai5 == ''){
        document.getElementById("capai51").focus();
        swal.fire("", "Capaian BABS Tertutup (KK)  Tidak Boleh Kosong", "error");  


     }else if (capai6 == ''){
        document.getElementById("capai61").focus();
        swal.fire("", "Capaian BABS Terbuka (KK)  Tidak Boleh Kosong", "error");  


     }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_airlimbah/main_act.php?module=capaian&act=edit",  
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
                        $("#kode_kota1").val('').trigger('change');
                        $('#jump11').val('');
                        $('#jump21').val('');
                        $('#jump31').val('');
                        $('#jump41').val('');
                        $('#capai11').val('');
                        $('#capai21').val('');
                        $('#capai31').val('');
                        $('#capai41').val('');
                        $('#capai51').val('');
                        $('#capai61').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportakseslimbah').DataTable().ajax.reload(); 
                        }
                     
						                
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