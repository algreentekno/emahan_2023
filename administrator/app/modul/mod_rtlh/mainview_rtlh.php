<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>RTLH</span></a></div></p>
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
                                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modaltambah"><em class="icon ni ni-note-add-fill-c"></em><span>Tambah Data</span></a></li>
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
                                    ?>
                                        <div class="table-responsive">
                                            <table width="100%" class="datatable-init-exportrtlh nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th rowspan="2">Kota/Kabupaten</th>
                                                      <th rowspan="2">Kecamatan</th>
                                                      <th rowspan="2">Desa/Kelurahan</th>
                                                      <th colspan="2">Jumlah Rumah</th>
                                                      <th colspan="2">Kegiatan Penanganan</th>
                                                      <th colspan="3">Jumlah Penanganan RTLH(Rumah)</th>
                                                      <th rowspan="2">Total Penanganan(Rumah)</th>
                                                      <th rowspan="2">Capaian (%)</th>
                                                      <th rowspan="2">Jumlah Rumah Layak Huni</th>
                                                      <th rowspan="2">Persentase Rumah Layak Huni</th>
                                                      <th rowspan="2">Data RTLH 2023</th>
                                                      <th rowspan="2">Peta Jumlah RTLH/Desa</th>
                                                      <th width="6%" rowspan="2"></th>
                                                    </tr>
                                                    <tr>
                                                    <th>Total Rumah</th>
                                                        <th>RTLH</th>
                                                        <th>Program/Kegiatan</th>
                                                        <th>Sumber Dana</th>
                                                        <th>2020</th>
                                                        <th>2021</th>
                                                        <th>2022</th>
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

