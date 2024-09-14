<script>  
 $(document).ready(function(){  
      $('#editdata').click(function(){  
    
          var formData = new FormData();
          var files = $('#gambar2')[0].files[0];
          formData.append('gambar',files);
          formData.append('id_galeridetail', $('#id_galeridetail2').val());
          
       
                $.ajax({  
                     url:"app/modul/mod_frontend/main_act.php?module=galeri&act=edit",  
                     method:"POST",  
                     data:formData,
                     cache: false,
                     processData: false,
                     contentType: false,
                     beforeSend:function(){  
                        $("#editdata").html('<img src="ajax-loader.gif" height="15px" width="15px" />');
                     
                     },  
                     success:function(data){ 
                        
                        console.log(response.data);
                        //swal.fire("","Simpan Sukses", "success");
                        
                        $('#gambar2').val('');
                        window.location.href = 'galeri';
                    
                       
						                
                     }, error: function(data){
						         
                    //swal.fire("", "Simpan Gagal Tidak dapat memproses...", "error");
						
					},
                    complete:function(data){
                        
                         $("#editdata").html('<em class="icon ni ni-save"></em> Simpan');
                     
                       
                       } 
                });  
            
      }) 
	  
	  
 })  
 
 </script>
<?php
include "../../../config/koneksi_li.php";
$sql11= "SELECT * from galeri_detail where gbr_galeri='$_POST[Id]'"; 
$hasil11 = mysqli_query($koneksi,$sql11);
$dataout1=mysqli_fetch_array($hasil11);
?>
<input type="hidden" class="form-control" id="id_galeridetail2" value="<?php echo $dataout1['id_galeridetail'];?>">
                
                    <div class="form-group">
    <label class="form-label" for="default-01">Rubah Foto Galeri</label>
    <div class="col-sm-6 col-lg-4">
                                        <div class="gallery card card-bordered">
                                                <img class="w-100 rounded-top" src="../img_galeri/<?php echo $dataout1['gbr_galeri'];?>" alt="">
                                            
                                        </div>
                                    </div><br>
    <div class="form-control-wrap">
    <input type="file" class="form-control" id="gambar2" value="">
    </div>
</div>
<span class="sub-text"><button class="btn btn-success" id="editdata"><em class="icon ni ni-save"></em> Simpan</button></span>
            