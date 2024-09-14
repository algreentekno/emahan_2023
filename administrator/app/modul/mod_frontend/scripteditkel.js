<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
        var id = $("#id1").val();
        var kode_kec = $("#kode_kec1").val();
        var kode_kota = $("#kode_kota1").val();
        var nama_kelurahan = $("#nama_kelurahan1").val();

         if (kode_kota == ''){
            document.getElementById("kode_kota1").focus();
            swal.fire("", "Nama Kabupaten Tidak Boleh Kosong", "error");  


         }else  if (kode_kec == ''){
            document.getElementById("kode_kec1").focus();
            swal.fire("", "Nama Kecamatan Tidak Boleh Kosong", "error");  


         }else if (nama_kelurahan == ''){
          document.getElementById("nama_kelurahan1").focus();
          swal.fire("", "Nama Kelurahan Tidak Boleh Kosong", "error");  


       }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=kel&act=edit",  
                     method:"POST",  
                     data:{id:id,kode_kota:kode_kota,kode_kec:kode_kec,nama_kelurahan:nama_kelurahan},
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $("#kode_kota1").val('').trigger('change');
                        $("#kode_kec1").val('').trigger('change');
                        $('#nama_kelurahan1').val('');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportkel').DataTable().ajax.reload(); 
                        
                     
						                
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