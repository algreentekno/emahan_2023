<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       
        var kode_kota = $("#kode_kota").val();
        var kode_kec = $("#kode_kec").val();
        var kode_kel = $("#kode_kel").val();
       

        if (kode_kota == ''){
            document.getElementById("kode_kota").focus();
            swal.fire("", "Kabupaten Tidak Boleh Kosong", "error"); 
        

        }else if (kode_kec == ''){
          document.getElementById("kode_kec").focus();
          swal.fire("", "Kecamatan Tidak Boleh Kosong", "error"); 
      

      }else if (kode_kel == ''){
          document.getElementById("kode_kel").focus();
          swal.fire("", "Kelurahan Tidak Boleh Kosong", "error"); 
      

      }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_airminum/main_act.php?module=rawan&act=add",  
                     method:"POST",  
                     data:{kode_kota:kode_kota,kode_kec:kode_kec,kode_kel:kode_kel},
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                       
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota").val('').trigger('change');
                        $("#kode_kec").val('').trigger('change');
                        $("#kode_kel").val('').trigger('change');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportrawanair').DataTable().ajax.reload(); 
                        
                     
						                
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