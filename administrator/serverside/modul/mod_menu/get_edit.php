<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from menu where id_menu='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id_menu1" value="<?php echo $dataout['id_menu'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Menu</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_menu1" placeholder="" value="<?php echo $dataout['nama_menu'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Level Menu</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="id_parent1" data-search="on">
    <?php
                                    
    $tampil=mysqli_query($koneksi,"SELECT * FROM menu ORDER BY id_menu");
   if ($dataout['parent_id']==0){
   echo "<option value='0' selected>Menu Utama</option>";}
   else {
   echo "<option value='0'>Menu Utama</option>";}

   while($w=mysqli_fetch_array($tampil)){
   if ($dataout['id_parent']==$w['id_menu']){
   echo "<option value='$w[id_menu]' selected>$w[nama_menu]</option>";}
   else{
   if ($w['id_menu']==$dataout['id_menu']){
   echo "<option value='0'>Tanpa Level</option>";}
   else{
   echo "<option value='$w[id_menu]'>$w[nama_menu]</option> </p>";
}
}
}
                                        ?>
    </select>    
                                    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Link Menu</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="link1" placeholder="" value="<?php echo $dataout['link'];?>">
    </div>
</div>

