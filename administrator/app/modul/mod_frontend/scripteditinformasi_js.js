<script>  
 $(document).ready(function(){  
      $('.edit').click(function(){  
    
          tinyMCE.triggerSave();

          var judul = $("#judul1").val();
          var id_kategori = $("#id_kategori1").val();
          var isi_berita = $(".isi_berita1").val();
          var alt_gambar = $("#alt_gambar1").val();

          var formData = new FormData();
          var files = $('#gambar1')[0].files[0];
          formData.append('gambar',files);
          formData.append('judul', $('#judul1').val());
          formData.append('alt_gambar', $('#alt_gambar1').val());
          formData.append('id_kategori', $('#id_kategori1').val());
          formData.append('isi_berita', $('.isi_berita1').val());
          formData.append('youtube', $('#youtube1').val());
          formData.append('id_berita', $('#id_berita1').val());
       

          if (judul == ''){
               document.getElementById("judul1").focus();
               swal.fire("", "Judul Informasi Tidak Boleh Kosong", "error"); 
           
   
           }else if (id_kategori == ''){
               document.getElementById("id_kategori1").focus();
               swal.fire("", "Nama Kategori Tidak Boleh Kosong", "error");  
   
   
            }else if (isi_berita == ''){
             document.getElementsByClassName("isi_berita1").focus();
             swal.fire("", "Detail Informasi Tidak Boleh Kosong", "error");  
   
   
          }else if (alt_gambar == ''){
             document.getElementById("alt_gambar1").focus();
             swal.fire("", "Keterangan Gambar Tidak Boleh Kosong", "error");  
   
   
          }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=informasi&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".edit").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                    
                        swal.fire("","Simpan Sukses", "success");
                        $('#judul1').val('');
                        $('#youtube1').val('');
                        $('.isi_berita1').val('');
                        $('#gambar1').val('');
                        $('#alt_gambar1').val('');
                        $("#id_kategori1").val('').trigger('change');
                        $('#modaledit').modal('hide');
                        $('.datatable-init-exportinformasi').DataTable().ajax.reload(); 
                       
						                
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