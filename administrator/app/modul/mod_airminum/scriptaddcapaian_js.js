<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
        var kode_kota = $("#kode_kota").val();
        var jump1 = $("#jump1").val();
        var jump2 = $("#jump2").val();
        var jump3 = $("#jump3").val();
        var jump4 = $("#jump4").val();
        var capai2 = $("#capai2").val();
        var capai4 = $("#capai4").val();
        var capai6 = $("#capai6").val();
        var capai8 = $("#capai8").val();
       
        var formData = new FormData();
        formData.append('kode_kota', $('#kode_kota').val());
        formData.append('jump1', $('#jump1').val());
        formData.append('jump2', $('#jump2').val());
        formData.append('jump3', $('#jump3').val());
        formData.append('jump4', $('#jump4').val());
        formData.append('capai2', $('#capai2').val());
        formData.append('capai4', $('#capai4').val());
        formData.append('capai6', $('#capai6').val());
        formData.append('capai8', $('#capai8').val());
        
        if (kode_kota == ''){
         document.getElementById("kode_kota").focus();
         swal.fire("", "Kabupaten/Kota Tidak Boleh Kosong", "error"); 
     

     }else if (jump1 == ''){
            document.getElementById("jump1").focus();
            swal.fire("", "Jumlah Penduduk (KK) Tidak Boleh Kosong", "error"); 
        

        }else if (jump2 == ''){
          document.getElementById("jump2").focus();
          swal.fire("", "Jumlah Penduduk (JIWA) Tidak Boleh Kosong", "error");  


       }else if (jump3 == ''){
          document.getElementById("jump3").focus();
          swal.fire("", "Jumlah Penduduk Perdesaan (JIWA)  Tidak Boleh Kosong", "error");  


       }
       else if (jump4 == ''){
         document.getElementById("jump4").focus();
         swal.fire("", "Jumlah Pendudk Perkotaan (JIWA)  Tidak Boleh Kosong", "error");  


      }else if (capai2 == ''){
        document.getElementById("capai2").focus();
        swal.fire("", "Akses Layak (KK)  Tidak Boleh Kosong", "error");  


     }else if (capai4 == ''){
        document.getElementById("capai4").focus();
        swal.fire("", "Jaringan Perpipaan (SR)  Tidak Boleh Kosong", "error");  


     }else if (capai6 == ''){
        document.getElementById("capai6").focus();
        swal.fire("", "Jaringan Non Perpipaan (KK)  Tidak Boleh Kosong", "error");  


     }else if (capai8 == ''){
      document.getElementById("capai8").focus();
      swal.fire("", "Aman (KK)  Tidak Boleh Kosong", "error");  


   }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_airminum/main_act.php?module=capaian&act=add",  
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
                        $('#jump1').val('');
                        $('#jump2').val('');
                        $('#jump3').val('');
                        $('#jump4').val('');
                        $('#capai2').val('');
                        $('#capai4').val('');
                        $('#capai6').val('');
                        $('#capai8').val('');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportcapaian').DataTable().ajax.reload(); 
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