<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Upload Bukti Dukung Penanganan</span></a></div></p>
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
                                        
                                         <div class="form-control-wrap mb-3">
                                                                <select class="form-select js-select2" data-ui="md" id="kode_kota" data-search="on">
                                                                   <option value=""></option>
                                                                    <?php
                                                                  
                                                                    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
                                                                    
                                                                    while ($jml=mysqli_fetch_array($tampil)){
                                                                    ?>
                                                                    <option value="<?php echo $jml['kode_kota'];?>"><?php echo $jml['nama_kota'];?></option>
                                                                    <?php
                                                                    }
                                                                    ?>    
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER KABUPATEN/KOTA</label>
                                                            </div>
                                                           
                                                            <div class="form-control-wrap mb-3">
                                                                <select class="form-select js-select2" data-ui="md" id="kode_kec">
                                                                
                                                                     
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER KECAMATAN</label>
                                                            </div>
                                                            <div class="form-control-wrap mb-3">
                                                                <select class="form-select js-select2" data-ui="md" id="kode_kel">
                                                                
                                                                     
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER KELURAHAN</label>
                                                            </div>
                                         <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-ui="md" id="tahun_data">
                                                                    
                                                                    <?php
                                                                    $now=date('Y');
                                                                    $tahundata1=$tahundata;
                                                                    for ($a=$tahundata1;$a<=$now;$a++)
                                                                    {
                                                                    echo "<option value='".$a."'>".$a."</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER TAHUN DATA PENANGANAN</label>
                                                            </div>
                                                           
                                                        <button class="btn btn-info caridata" style="margin-top: 10px;"><em class="icon ni ni-search"></em> Cari Data</button>
                                                        <button class="btn btn-info" style="margin-top: 10px;" data-bs-toggle="modal" data-bs-target="#modalnik"><em class="icon ni ni-search"></em> Cari NIK</button>    
                                                        <p style="margin-top: 20px;">
                                            <div class="table-responsive">
                                        <table width="100%" class="datatable-init-lihatpenanganan nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>NO. KTP</th>
                                                        <th>Nama Kepala Keluarga</th>
                                                        <th>Alamat</th>
                                                        <th>Luas Rumah</th>
                                                        <th>Status Kepemilikan Rumah</th>
                                                        <th>Jenis Kawasan</th>
                                                        <th>Verifikasi</th>
                                                        <th>Tahun Verifikasi</th>
                                                        <th>Penanganan</th>
                                                        <th>Sumber Dana</th>
                                                       
                                                        <th>Tahun Bantuan</th>
                                                        <th>Bukti Dukung Saldo Masuk Rekening</th>
                                                        <th>Bukti Dukung Pembelian Material</th>
                                                        <th>Bukti Dukung Rumah 100%</th>

                                                       
                                                        <th width="6%"></th>
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
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modalnik">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Cari Data NIK</h5>
            </div>
            <div class="modal-body">
                <p>
                <div class="form-group">
    <label class="form-label" for="default-01">Masukan NIK yang ingin dicari</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nik" placeholder="">
    </div>
</div>
        </p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><a href="#" class="btn btn-success carinik"><em class="icon ni ni-search"></em> Cari</a></span>
            </div>
        </div>
    </div>
</div>
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaleditbukti">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Upload Bukti Dukung Penanganan</h5>
            </div>
            <div class="modal-body">
            
                <div class="hasil-datastatus"></div>

            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><a href="#" class="btn btn-success uploadbukti"><em class="icon ni ni-save"></em> Simpan</a></span>
            </div>
        </div>
    </div>
</div>