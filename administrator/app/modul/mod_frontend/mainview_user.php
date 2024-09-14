<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Pengaturan User</span></a></div></p>
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
                                            <table width="100%" class="datatable-init-exportusermanager nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                    
                                                        <th>Nip</th>
                                                        <th>Username</th>
                                                        <th>email</th>
                                                        <th>No. HP</th>
                                                        <th>Level</th>
                                                        <th>Kabupaten/Kota</th>
                                                        <th width="6%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Bandar Lampung</td>
                                                        <td>SOP</td>
                                                        <td>No.12/2023 2023-08-12</td>
                                                        
                                                        <td><div align="center"> 
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" class="btn btn-sm btn-round btn-icon btn-success"><em class="icon ni ni-edit"></em></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" class="btn btn-sm btn-round btn-icon btn-info"><em class="icon ni ni-eye"></em></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modaledit" class="btn btn-sm btn-round btn-icon btn-danger"><em class="icon ni ni-trash"></em></a>
                                                      
                                                            </div></td>
                                                    </tr>
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
    <label class="form-label" for="default-01">Level</label>
    <div class="form-control-wrap">
    <select class="form-select js-select2" id="level" data-search="on">
    <option value="">PILIH LEVEL</option>
    
    <option value="0">Admin</option>
    <option value="1">Operator Kabupaten/Kota</option>
    <option value="2">Penanganan</option>
       
</select>
    </div>
</div>

<div class="pilihkab"></div><br>

                    <div class="form-group">
    <label class="form-label" for="default-01">Nomor NIK</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nip" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Lengkap</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_lengkap" placeholder="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Email</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="email" placeholder="">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">No. Telpon</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="no_telp" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>

<div class="form-group">
    <label class="form-label" for="default-01">Username</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="username" placeholder="">
    </div>
</div><div class="form-group">
    <label class="form-label" for="default-01">Password</label>
    <div class="form-control-wrap">
        <input type="password" class="form-control" id="password" placeholder="">
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