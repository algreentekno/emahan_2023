<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from user where username='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>

<input type="hidden" class="form-control" id="username1" value="<?php echo $dataout['username'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nomor NIK</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nip1" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="<?php echo $dataout['nip'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Lengkap</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_lengkap1" placeholder="" value="<?php echo $dataout['nama_lengkap'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Email</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="email1" placeholder="" value="<?php echo $dataout['email'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">No. Telpon</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="no_telp1" value="<?php echo $dataout['no_telp'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>

<div class="form-group">
    <label class="form-label" for="default-01">Username</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="username" placeholder="" value="<?php echo $dataout['username'];?>" readonly>
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Password</label><br>
    <small>* Silahkan Isi Password Bila Ingin Dirubah</small>
    <div class="form-control-wrap">
        <input type="password" class="form-control" id="password1" placeholder="">
    </div>
</div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Level</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="level1" placeholder="" value="<?php 
        if($dataout['level']=='0'){
            $lvd="Administrator";
        }else{
            $lvd="Operator Kabupaten/Kota";
        }
        
        echo $lvd;?>" readonly>
    </div>
</div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Kabupaten/Kota</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota1" placeholder="" value="<?php 
        $checkRecord11sss = mysqli_query($koneksi,"SELECT * FROM kota WHERE kode_kota='$dataout[kode_kota]'");
        $jums = mysqli_fetch_array($checkRecord11sss);
        
        echo $jums['nama_kota'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Blokir</label>
    <div class="form-control-wrap">
    <select class="form-select" id="blokir1" >
        <?php
        if($dataout['blokir']=='Y'){
       ?>
       <option value="Y" selected>Ya</option>
    <option value="N">Tidak</option>

       <?php     
        }else{
         ?>
    <option value="Y">Ya</option>
    <option value="N" selected>Tidak</option>
         
         <?php
        }
        ?>
    </select>
    </div>
</div>


