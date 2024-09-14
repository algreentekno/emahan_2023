<script>  
 $(document).ready(function(){  
      $('.tambah').click(function(){  
    
       tinyMCE.triggerSave();

        var judul = $("#judul").val();
        var id_kategori = $("#id_kategori").val();
        var gambar = $("#gambar").val();
        var alt_gambar = $("#alt_gambar").val();
       
        var formData = new FormData();
        var files = $('#gambar')[0].files[0];
        formData.append('gambar',files);
        formData.append('judul', $('#judul').val());
        formData.append('alt_gambar', $('#alt_gambar').val());
        formData.append('id_kategori', $('#id_kategori').val());
        formData.append('isi_berita', $('#isi_berita').val());
        formData.append('youtube', $('#youtube').val());
        formData.append('tag', $('#tag').val());
       

        if (judul == ''){
            document.getElementById("judul").focus();
            swal.fire("", "Judul Informasi Tidak Boleh Kosong", "error"); 
        

        }else if (id_kategori == ''){
            document.getElementById("id_kategori").focus();
            swal.fire("", "Nama Kategori Tidak Boleh Kosong", "error");  


         }else if (isi_berita == ''){
          document.getElementById("isi_berita").focus();
          swal.fire("", "Detail Informasi Tidak Boleh Kosong", "error");  


       }else if (gambar == ''){
          document.getElementById("gambar").focus();
          swal.fire("", "Gambar/Foto Tidak Boleh Kosong", "error");  


       }else if (alt_gambar == ''){
          document.getElementById("alt_gambar").focus();
          swal.fire("", "Keterangan Gambar Tidak Boleh Kosong", "error");  


       }
           else  
           {  
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=informasi&act=add",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $(".tambah").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                      
                        
                        swal.fire("","Simpan Sukses", "success");
                        $('#judul').val('');
                        $('#youtube').val('');
                        //$('#isi_berita').val('');
                        tinyMCE.activeEditor.setContent('');
                        $('#gambar').val('');
                        $('#alt_gambar').val('');
                        $("#id_kategori").val('').trigger('change');
                        $("#tag").val('').trigger('change');
                        $('#modaltambah').modal('hide');
                        $('.datatable-init-exportinformasi').DataTable().ajax.reload(); 
                        
                     
						                
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