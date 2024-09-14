<div class="nk-content nk-content-fluid">
                <div class="container-xl wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-des text-soft">
                                            <p><div class="nk-block-head-sub" style="color: black;"><a class="back-to" href="dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Batal Data Pendataan</span></a></div></p>
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
                                                                     if($_SESSION['level']!='0'){
                                                                        $tampil=mysqli_query($koneksi,"SELECT * FROM kota where kode_kota='$kodekota' order by Id");
                                                                    }else{
                                                                    $tampil=mysqli_query($koneksi,"SELECT * FROM kota order by Id");
                                                                    }
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
                                         <div class="form-control-wrap mb-3">
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
                                                                <label class="form-label-outlined" for="outlined-select">FILTER TAHUN DATA</label>
                                                            </div>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select js-select2" data-ui="md" id="lihatdata">
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                    <option value="500">500</option>
                                                                    <option value="1000">1000</option>
                                                                </select>
                                                                <label class="form-label-outlined" for="outlined-select">FILTER DATA</label>
                                                            </div>
                                                           
                                                        <button class="btn btn-info caridata" style="margin-top: 10px;"><em class="icon ni ni-search"></em> Cari Data</button>
                                                            <p style="margin-top: 20px;">
                                                            <div class="alert alert-icon alert-primary" role="alert">
    <em class="icon ni ni-alert-circle"></em> 
    <strong>Keyword Pencarian : </strong> Silahkan gunakan NIK atau Nama Kepala Keluarga. 
</div>
                                                       <div id="result">     
                                            <div class="table-responsive">
                                        <table width="100%"  class="example nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                        
                                                        <th></th>
                                                        
                                                        <th>Kota/Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kelurahan/Desa</th>
                                                        <th>NO. KTP</th>
                                                        <th>Nama Kepala Keluarga</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Nomor Handphone</th>
                                                        <th>Pekerjaan</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
    <td></td>  
    <td></td>
    <td></td>  
    <td></td>  
    <td></td>  
    <td></td>  
    <td></td>  
    <td></td>  
    <td></td>  
    
   
    </tr>    
                                                </tbody>
                                            </table>
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
