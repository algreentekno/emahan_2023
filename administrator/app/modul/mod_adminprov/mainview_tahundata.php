<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Mulai Tahun Data</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->

                                    <?php
                                                $sql1= "SELECT * from tahun_data order by id_tahun limit 1"; 
                                                $hasil1 = mysqli_query($koneksi,$sql1);
                                                $dataout=mysqli_num_rows($hasil1);
                                                if($dataout>0){}else{
                                                ?>
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
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
                                        <div class="table-responsive">
                                            <table width="100%" class="datatable-init-exporttahundata nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                   
                                                        <th>Tahun Data</th>
                                                       
                                                        <th width="6%">Aksi</th>
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

<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaltambah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
            </div>
            <div class="modal-body">
                <p>

                <div class="form-group">
    <label class="form-label" for="default-01">Tahun Data</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="tahun_data" placeholder="">
    </div>
</div>


                </p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><a href="#" class="btn btn-success tambah"><em class="icon ni ni-save"></em> Simpan</a></span>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------ -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modaledit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-datastatus"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"><span class="sub-text"><a href="#" class="btn btn-success edit"><em class="icon ni ni-save"></em> Simpan</a></span>
            </span>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------------------------- -->
