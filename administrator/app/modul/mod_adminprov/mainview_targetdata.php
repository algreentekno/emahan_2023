<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Target Data</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                       
                                        <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1">Target Air Limbah Domestik</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " data-bs-toggle="tab" href="#tabItem4">Target Air Minum</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" data-bs-toggle="tab" href="#tabItem5">Target Persampahan</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="tabItem1">
        <p>
<!-- ----------------------------------------------------------------- -->
<div class="form-control-wrap mb-3">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select11">
                                                                   
                                                                    <?php
                                                                    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
                                                                    while ($jml=mysqli_fetch_array($tampil)){
                                                                    ?>
                                                                    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
                                                                    <?php
                                                                    }
                                                                    ?>    
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER KABUPATEN</label>
                                                            </div>
                                         <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select12">
                                                                    
                                                                    <?php
                                                                    $now=date('Y');
                                                                    $tahundata1=$tahundata;
                                                                    for ($a=$tahundata1;$a<=$now;$a++)
                                                                    {
                                                                    echo "<option value='".$a."'>".$a."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER TAHUN DATA</label>
                                                            </div>
<!-- ------------------------------------------------------------------- -->                                                            
<br>
<div align="right" class="mb-2"><a href="#" data-bs-toggle="modal" data-bs-target="#modaltambahlimbah" class="btn btn-outline-danger"><em class="icon ni ni-plus-round"></em> Tambah Data Target</a></div>
            <div class="table-responsive">
            <table width="100%" class="datatable-init-exportakseslimbahtargetprov nowrap greyGridTable" data-export-title="Export">
            <thead>
              <tr>
                <th>Kota/Kabupaten</th>
                <th>Capaiann Akses Aman (%)</th>
                <th>Capaian Akses Sanitasi Layak Sendiri (%)</th>
                <th>Capaian Akses Sanitasi Layak - Bersama (%)</th>
                <th>Capaian Akses Sanitasi Belum Layak (%)</th>
                <th>Capaian BABS Tertutup (%)</th>
                <th>Capaian BABS Terbuka (%)</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div></p>
    </div>
    <div class="tab-pane" id="tabItem4">
    <div class="form-control-wrap mb-3">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select13">
                                                                   
                                                                    <?php
                                                                    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
                                                                    while ($jml=mysqli_fetch_array($tampil)){
                                                                    ?>
                                                                    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
                                                                    <?php
                                                                    }
                                                                    ?>    
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER KABUPATEN</label>
                                                            </div>
                                         <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select14">
                                                                    
                                                                    <?php
                                                                    $now=date('Y');
                                                                    $tahundata1=$tahundata;
                                                                    for ($a=$tahundata1;$a<=$now;$a++)
                                                                    {
                                                                    echo "<option value='".$a."'>".$a."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER TAHUN DATA</label>
                                                            </div>
<!-- ------------------------------------------------------------------- -->                                                            
<br>
<div align="right" class="mb-2"><a href="#" data-bs-toggle="modal" data-bs-target="#modaltambahairminum" class="btn btn-outline-danger"><em class="icon ni ni-plus-round"></em> Tambah Data Target</a></div>
           
        <p><div class="table-responsive">
        <table width="100%" class="datatable-init-exporttargetprov nowrap greyGridTable" data-export-title="Export">
                <thead>
                  <tr>
                    <th>Kota/Kabupaten</th>
                    <th>Akses Layak (%)</th>
                   
                    <th>Jaringan Perpipaan (%)</th>
                   
                    <th>Jaringan Non Perpipaan (%)</th>
                  
                    <th>Aman (%)</th>
                   
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
        </div></p>
    </div>
    <div class="tab-pane" id="tabItem5">
    <div class="form-control-wrap mb-3">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select15">
                                                                   
                                                                    <?php
                                                                    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
                                                                    while ($jml=mysqli_fetch_array($tampil)){
                                                                    ?>
                                                                    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
                                                                    <?php
                                                                    }
                                                                    ?>    
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER KABUPATEN</label>
                                                            </div>
                                         <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select16">
                                                                    
                                                                    <?php
                                                                    $now=date('Y');
                                                                    $tahundata1=$tahundata;
                                                                    for ($a=$tahundata1;$a<=$now;$a++)
                                                                    {
                                                                    echo "<option value='".$a."'>".$a."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER TAHUN DATA</label>
                                                            </div>
<!-- ------------------------------------------------------------------- -->                                                            
<br>
<div align="right" class="mb-2"><a href="#" data-bs-toggle="modal" data-bs-target="#modaltambahsampah" class="btn btn-outline-danger"><em class="icon ni ni-plus-round"></em> Tambah Data Target</a></div>
           
        <p><div class="table-responsive">
        <table width="100%" class="datatable-init-exportaksessampahtargetprov nowrap greyGridTable" data-export-title="Export">
            <thead>
              <tr>
                <th>Kota/Kabupaten</th>
                <th>Timbulan Sampah (TON/Tahun) (%)</th>
                <th>Penanganan Sampah (TON/Tahun) (%)</th>
                <th>Prosentase Penanganan (%)</th>
                <th>Pengurangan Sampah (TON/Tahun) (%)</th>
                <th>Prosentase Penguranagn (%)</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div></p>
    </div>
</div>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div> <!-- nk-block -->
                                  
                                    
                                <!-- ------------------------------------------------------------------------------- -->    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- ------------------------------------------------------------------------------- -->
<!-- TAMBAH DATA TARGET LIMBAH -->
<!-- ------------------------------------------------------------------------------- -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaltambahlimbah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Target Air Limbah Domestik</h5>
            </div>
            <div class="modal-body">
                <p><div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten/Kota</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kota1" data-search="on">
    <option value="">PILIH KABUPATEN</option>
    <?php
    if($_SESSION['level']=='0' OR $_SESSION['level']=='1'){
    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
    }else{
        $tampil=mysqli_query($koneksi,"SELECT * FROM kota where kode_kota='$_SESSION[kodekota]' order by Id");  
    }
    while ($jml=mysqli_fetch_array($tampil)){
    ?>
    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
    <?php
    }
    ?>    
</select>
    </div>
</div>
<!--
<div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (KK)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump11" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump21" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk Perdesaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump31" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Pendudk Perkotaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump41" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
-->
<div class="form-group">
    <label class="form-label" for="default-01">Capaian Akes Aman (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai11" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian Akes Sanitasi Layak Sendiri (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai21" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian Akes Sanitasi Layak Bersama (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai31" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian Akes Sanitasi Belum Layak (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai41" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian BABS Tertutup (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai51" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Capaian BABS Terbuka (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai61" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
</p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><a href="#" class="btn btn-success tambahlimbah"><em class="icon ni ni-save"></em> Simpan</a></span>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------ -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaleditlimbah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Target Air Limbah Domestik</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-datastatuslimbah"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><span class="sub-text"><a href="#" class="btn btn-success editlimbah"><em class="icon ni ni-save"></em> Simpan</a></span>
            </span>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------- -->
<!-- TAMBAH DATA TARGET AIR MINUM -->
<!-- ------------------------------------------------------------------------------- -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaltambahairminum">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Target Air Minum</h5>
            </div>
            <div class="modal-body">
                <p><div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten/Kota</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kota29" data-search="on">
    <option value="">PILIH KABUPATEN</option>
    <?php
    if($_SESSION['level']=='0' OR $_SESSION['level']=='1'){
    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
    }else{
        $tampil=mysqli_query($koneksi,"SELECT * FROM kota where kode_kota='$_SESSION[kodekota]' order by Id");  
    }
    while ($jml=mysqli_fetch_array($tampil)){
    ?>
    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
    <?php
    }
    ?>    
</select>
    </div>
</div>
<!--
<div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (KK)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump129" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump229" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Penduduk Perdesaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump329" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jumlah Pendudk Perkotaan (JIWA)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jump429" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
-->
<div class="form-group">
    <label class="form-label" for="default-01">Akses Layak (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai129" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jaringan Perpipaan (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai329" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Jaringan Non Perpipaan (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai529" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Aman (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai729" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
</p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><a href="#" class="btn btn-success tambahairminum"><em class="icon ni ni-save"></em> Simpan</a></span>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------ -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaleditairminum">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Target Air Minum</h5>
            </div>
            <div class="modal-body">
            <p><div class="hasil-datastatusairminum"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><span class="sub-text"><a href="#" class="btn btn-success editairminum"><em class="icon ni ni-save"></em> Simpan</a></span>
            </span>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------------------------- -->
<!-- --------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------------------- -->
<!-- TAMBAH DATA TARGET SAMPAH -->
<!-- ------------------------------------------------------------------------------- -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaltambahsampah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Target Persampahan</h5>
            </div>
            <div class="modal-body">
                <p>
                <div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten/Kota</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="kode_kota365" data-search="on">
    <option value="">PILIH KABUPATEN</option>
    <?php
    if($_SESSION['level']=='0' OR $_SESSION['level']=='1'){
    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
    }else{
        $tampil=mysqli_query($koneksi,"SELECT * FROM kota where kode_kota='$_SESSION[kodekota]' order by Id");  
    }
    while ($jml=mysqli_fetch_array($tampil)){
    ?>
    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
    <?php
    }
    ?>    
</select>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Timbulan Sampah (TON/Tahun) (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai1365" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Penanganan Sampah (TON/Tahun) (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai2365" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Prosentase Penanganan (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai3365" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Pengurangan Sampah (TON/Tahun) (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai4365" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Prosentase Pengurangan (%)</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="capai5365" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>

                </p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><a href="#" class="btn btn-success tambahsampah"><em class="icon ni ni-save"></em> Simpan</a></span>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------ -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaleditsampah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Target Persampahan</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-datastatussampah"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><span class="sub-text"><a href="#" class="btn btn-success editsampah"><em class="icon ni ni-save"></em> Simpan</a></span>
            </span>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------------------------- -->