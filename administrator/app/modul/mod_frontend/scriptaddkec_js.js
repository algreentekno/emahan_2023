<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
        var kode_kota = $("#kode_kota").val();
        var kode_kec = $("#kode_kec").val();
        var nama_kecamatan = $("#nama_kecamatan").val();
       

        if (kode_kota == ''){
            document.getElementById("kode_kota").focus();
            swal.fire("", "Nama Kabupaten Tidak Boleh Kosong", "error"); 
        

        }else if (kode_kec == ''){
            document.getElementById("kode_kec").focus();
            swal.fire("", "Kode Kecamatan Tidak Boleh Kosong", "error");  


         }
         else if (nama_kecamatan == ''){
          document.getElementById("nama_kecamatan").focus();
          swal.fire("", "Nama Kecamatan Tidak Boleh Kosong", "error");  


       }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=kec&act=add",  
                     method:"POST",  
                     data:{kode_kota:kode_kota,kode_kec:kode_kec,nama_kecamatan:nama_kecamatan},
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        if(data==2){
                            swal.fire("", "Kode Kecamatan/Kota Sudah Ada", "error");
                           }else{
                        swal.fire("","Simpan Sukses", "success");
                        $('#kode_kec').val('');
                        $('#nama_kecamatan').val('');
                        $("#kode_kota").val('').trigger('change');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportkec').DataTable().ajax.reload(); 
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