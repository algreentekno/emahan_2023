<?php
$key=$_GET['key'];
?>

<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Upload Data Pendataan</span></a></div></p>
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
                                        
                                                            
                                      
                                        <input type="hidden" id="key" value="<?php echo $key;?>">
                                                            <p style="margin-top: 20px;">
                                            <div class="table-responsive">
                                        <table width="100%" class="datatable-init-uploaddata nowrap greyGridTable" data-export-title="Export">
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
                                                        <th width="6%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>

                                            
                                        </div>
                                        
                                            <button class="btn btn-info simpan" style="margin-top: 10px;"><em class="icon ni ni-save"></em> Simpan Data</button>
                                
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
