<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Galeri Kegiatan</span></a></div></p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
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
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                <!-- ------------------------------------------------------------------------------- -->    
                                    
                                    
                                <div class="nk-block nk-block-lg">
                                    
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                        <div class="table-responsive">
                                            <table width="100%" class="datatable-init-exportgaleri nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                   
                                                        <th>Judul</th>
                                                        <th>Album</th>
                                                        <th>Foto Galeri</th>
                                                       
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
                    <?php
function generatestring($panjang){
$karakter='ABCDEFGHIJKLMNOPQRSTUVW123456789';
$string='';
for($i=0;$i<$panjang;$i++){
$pos=rand(0, strlen($karakter)-1);
$string .= $karakter[$pos];
}
return $string;
}
$rdm=generatestring(7);
                    ?>
                    <input type="hidden" class="form-control" id="rdm" value="<?php echo $rdm;?>">
                <div class="form-group">
    <label class="form-label" for="default-01">Judul Galeri</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="jdl_galeri" placeholder="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Album Foto</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="id_album" data-search="on">
    <option value="">Pilih Album</option>
    <?php
    $tampil=mysqli_query($koneksi,"SELECT * FROM album order by id_album");
    while ($jml=mysqli_fetch_array($tampil)){
    ?>
    <option value="<?php echo $jml['id_album'];?>"><?php echo $jml['jdl_album'];?></option>
    <?php
    }
    ?>    
</select>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Foto Galeri</label>
    <div class="form-control-wrap">
                                                        <div class="upload-zone">
                                                            <div class="dz-message" data-dz-message>
                                                                <span class="dz-message-text">Drag and drop file</span>
                                                                <span class="dz-message-or">or</span>
                                                                <button class="btn btn-primary">SELECT</button>
                                                            </div>
                                                        </div>	

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
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Galeri</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-datastatus"></div></p>
            </div>
            <div class="modal-footer bg-light">
                 </span>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------------------------- -->
<div class="modal fade zoom" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" id="modallihat">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
            <div class="modal-header">
                <h5 class="modal-title">Lihat Data</h5>
            </div>
            <div class="modal-body">
                <p><div class="hasil-datadetail"></div></p>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text"></span>
            </div>
        </div>
    </div>
</div>