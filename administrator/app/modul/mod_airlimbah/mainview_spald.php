<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>SPALD</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <?php
                                    if($_SESSION['level']=='0'){
                                        ?>
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                <li><a href="#" class="btn btn-warning" style="color: black;"><em class="icon ni ni-download-cloud"></em><span>Import Data</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-warning" style="color: black;" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="spladadd"><em class="icon ni ni-note-add-fill-c"></em><span>Tambah Data</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- .toggle-expand-content -->
                                        </div><!-- .toggle-wrap -->
                                    </div><!-- .nk-block-head-content -->
                                    <?php
                                    }
                                    ?>
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">

                                        <?php
                                    if($_SESSION['level']=='0' OR $_SESSION['level']=='1'){
                                        ?>
                                         <div class="form-control-wrap mb-3">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select1">
                                                                   
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
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select2">
                                                                    
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
                                        <?php
                                    }else{
                                        ?>
                                           <!-- ----------------------------------------------------------------- --> 
                                             <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-ui="md" id="outlined-select">
                                                                   
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
                                            <!-- ----------------------------------------------------------------- --> 
                                        <?php
                                    }
                                    ?>       <div class="table-responsive">
                                            <table width="100%" class="datatable-init-exportspald nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    
                                                        <th width="12%" rowspan="2">Kota/Kabupaten</th>
                                                        <th width="9%" rowspan="2">Kecamatan</th>
                                                        <th width="17%" rowspan="2">Kelurahan/Desa</th>
                                                        <th width="12%" rowspan="2">Nama SPALDS</th>
                                                        <th width="14%" rowspan="2">Tahun Pembangunan</th>
                                                        <th colspan="2">Jumlah Sambungan Rumah</th>
                                                        <th width="0%" rowspan="2">Jumalh KK</th>
                                                        <th width="0%" rowspan="2">Jenis Sarpas</th>
                                                        <th width="0%" rowspan="2">Status</th>
                                                        <th width="0%" rowspan="2">Kondisi Infrastruktur</th>
                                                        <th width="0%" rowspan="2">Sumber Dana Pembangunan</th>
                                                        <th width="0%" rowspan="2">Foto</th>
                                                        <th width="0%" rowspan="2">Titik Kordinat</th>
                                                       
                                                        <th width="3%" rowspan="2"></th>
                                                    </tr>
                                                    <tr>
                                                      <th>Rencana</th>
                                                      <th>Realisasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
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

<!-- ------------------------------------------------------------------ -->

<!-- --------------------------------------------------------------- -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaledit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit FOTO DAN MARKER POINT</h5>
            </div>
            <div class="modal-body">
            <p><div class="hasil-edit"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><span class="sub-text"><a href="#" class="btn btn-success editfoto"><em class="icon ni ni-save"></em> Simpan</a></span>
            </span>
            </div>
        </div>
    </div>
</div>
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modalfoto">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Lihat Foto</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-foto"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"></span>
            </div>
        </div>
    </div>
</div>
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modalmap">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Lihat Maps</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-map"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"></span>
            </div>
        </div>
    </div>
</div>