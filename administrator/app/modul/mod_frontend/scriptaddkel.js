<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
        var kode_kota = $("#kode_kota").val();
        var kode_kec = $("#kode_kec").val();
        var kode_kel = $("#kode_kel").val();
        var nama_kelurahan = $("#nama_kelurahan").val();
       

        if (kode_kota == ''){
            document.getElementById("kode_kota").focus();
            swal.fire("", "Nama Kabupaten Tidak Boleh Kosong", "error"); 
        

        }else if (kode_kec == ''){
            document.getElementById("nama_kota").focus();
            swal.fire("", "Nama Kecamatan Tidak Boleh Kosong", "error");  


         }
         else if (kode_kel == ''){
            document.getElementById("nama_kota").focus();
            swal.fire("", "Kode Kelurahan Tidak Boleh Kosong", "error");  


         }
         else if (nama_kelurahan == ''){
          document.getElementById("nama_kota").focus();
          swal.fire("", "Nama Kelurahan Tidak Boleh Kosong", "error");  


       }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=kel&act=add",  
                     method:"POST",  
                     data:{kode_kota:kode_kota,kode_kec:kode_kec,kode_kel:kode_kel,nama_kelurahan:nama_kelurahan},
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("", "Kode Kelurahan/Kota Sudah Ada", "error");
                           }else{
                        swal.fire("","Simpan Sukses", "success");
                        $('#kode_kel').val('');
                        $('#nama_kelurahan').val('');
                        $("#kode_kota").val('').trigger('change');
                        $("#kode_kec").val('').trigger('change');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportkel').DataTable().ajax.reload(); 
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