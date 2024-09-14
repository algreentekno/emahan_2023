<?php
session_start();
include "../config/koneksi_li.php";
$kodekota=$_POST['kodekota'];
$kodekec=$_POST['kodekec'];
$kodekel=$_POST['kodekel'];
$tahundata=$_POST['tahundata'];
if($kodekota!='' AND $kodekec=='' AND $kodekel==''){
    $sql1k= "SELECT nama_kota from kota where kode_kota='$kodekota'"; 
    $hasil1k = mysqli_query($koneksi,$sql1k);
    $dtahsl=mysqli_fetch_array($hasil1k);
    $kota=$dtahsl['nama_kota'];
?>
<div class="table-responsive">
                                        <table width="100%" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                        <th width="31%">Kota/Kabupaten</th>
                                                        <th width="25%">Kecamatan</th>
                                                        <th width="26%">Tahun Penanganan</th>
                                                        <th width="18%">Jumlah</th>
                                                    </tr>
                                                  
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql1= "SELECT nama_kecamatan from  kecamatan where kode_kota='$kodekota'"; 
                                                    $hasil1 = mysqli_query($koneksi,$sql1);
                                                    while ($dataout=mysqli_fetch_array($hasil1)){
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $kota;?></td>
                                                    <td><?php echo $dataout['nama_kecamatan'];?></td>
                                                    <td><?php echo $tahundata;?></td>
                                                    <td>
                                                    <?php 
                                                    $sql1m= "SELECT count(*) as jmlh from rtlh where kode_kec='$dataout[kode_kec]' and sts_penanganan='Y' and tahun_penanganan='$tahundata'"; 
                                                    $hasil1m = mysqli_query($koneksi,$sql1m);
                                                    $dataoutm=mysqli_fetch_array($hasil1m);
                                                    $hsl=$dataoutm['jmlh'];
                                                    echo $hsl;
                                                    ?>
                                                    </td>
                                                    </tr>
                                                   <?php
                                                   $jmlhhsl +=$hsl;
                                                    }
                                                    
                                                   ?>
                                                </tbody>
                                                <tfoot>
                                                  <tr>
                                                <td colspan="3"><div align='right'><b>TOTAL PENANGANAN</b></div></td>
                                                      <td><?php echo $jmlhhsl;?></td>

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
<?php
}elseif($kodekota!='' AND $kodekec!='' AND $kodekel==''){
    $sql1kk= "SELECT nama_kota from kota where kode_kota='$kodekota'"; 
    $hasil1kk = mysqli_query($koneksi,$sql1kk);
    $dtahslk=mysqli_fetch_array($hasil1kk);
    $kota=$dtahslk['nama_kota'];

    $sql1k= "SELECT nama_kecamatan from kecamatan where kode_kec='$kodekec'"; 
    $hasil1k = mysqli_query($koneksi,$sql1k);
    $dtahsl=mysqli_fetch_array($hasil1k);
    $kecamatan=$dtahsl['nama_kecamatan'];
?>
<div class="table-responsive">
                                        <table width="100%" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                        <th width="20%">Kota/Kabupaten</th>
                                                        <th width="21%">Kecamatan</th>
                                                        <th width="20%">Kelurahan</th>
                                                        <th width="19%">Tahun Penanganan</th>
                                                        <th width="20%">Jumlah</th>
                                                    </tr>
                                                  
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql1= "SELECT nama_kelurahan from  kelurahan where kode_kec='$kodekec'"; 
                                                    $hasil1 = mysqli_query($koneksi,$sql1);
                                                    while ($dataout=mysqli_fetch_array($hasil1)){
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $kota;?></td>
                                                    <td><?php echo $kecamatan;?></td>
                                                    <td><?php echo $dataout['nama_kelurahan'];?></td>
                                                    <td><?php echo $tahundata;?></td>
                                                    <td>
                                                    <?php 
                                                    $sql1m= "SELECT count(*) as jmlh from rtlh where kode_kel='$dataout[kode_kel]' and sts_penanganan='Y' and tahun_penanganan='$tahundata'"; 
                                                    $hasil1m = mysqli_query($koneksi,$sql1m);
                                                    $dataoutm=mysqli_fetch_array($hasil1m);
                                                    $hsl=$dataoutm['jmlh'];
                                                    echo $hsl;
                                                    ?>
                                                    </td>
                                                    </tr>
                                                   <?php
                                                   $jmlhhsl +=$hsl;
                                                    }
                                                    
                                                   ?>
                                                </tbody>
                                                <tfoot>
                                                  <tr>
                                                <td colspan="4"><div align='right'><b>TOTAL PENANGANAN</b></div></td>
                                                      <td><?php echo $jmlhhsl;?></td>

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
<?php
}elseif($kodekota!='' AND $kodekec!='' AND $kodekel!=''){
    $sql1kk= "SELECT nama_kota from kota where kode_kota='$kodekota'"; 
    $hasil1kk = mysqli_query($koneksi,$sql1kk);
    $dtahslk=mysqli_fetch_array($hasil1kk);
    $kota=$dtahslk['nama_kota'];

    $sql1k= "SELECT nama_kecamatan from kecamatan where kode_kec='$kodekec'"; 
    $hasil1k = mysqli_query($koneksi,$sql1k);
    $dtahsl=mysqli_fetch_array($hasil1k);
    $kecamatan=$dtahsl['nama_kecamatan'];
?>
<div class="table-responsive">
                                        <table width="100%" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                        <th width="20%">Kota/Kabupaten</th>
                                                        <th width="21%">Kecamatan</th>
                                                        <th width="20%">Kelurahan</th>
                                                        <th width="19%">Tahun Penanganan</th>
                                                        <th width="20%">Jumlah</th>
                                                    </tr>
                                                  
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql1= "SELECT nama_kelurahan from  kelurahan where kode_kel='$kodekel'"; 
                                                    $hasil1 = mysqli_query($koneksi,$sql1);
                                                    while ($dataout=mysqli_fetch_array($hasil1)){
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $kota;?></td>
                                                    <td><?php echo $kecamatan;?></td>
                                                    <td><?php echo $dataout['nama_kelurahan'];?></td>
                                                    <td><?php echo $tahundata;?></td>
                                                    <td>
                                                    <?php 
                                                    $sql1m= "SELECT count(*) as jmlh from rtlh where kode_kel='$dataout[kode_kel]' and sts_penanganan='Y' and tahun_penanganan='$tahundata'"; 
                                                    $hasil1m = mysqli_query($koneksi,$sql1m);
                                                    $dataoutm=mysqli_fetch_array($hasil1m);
                                                    $hsl=$dataoutm['jmlh'];
                                                    echo $hsl;
                                                    ?>
                                                    </td>
                                                    </tr>
                                                   <?php
                                                   $jmlhhsl +=$hsl;
                                                    }
                                                    
                                                   ?>
                                                </tbody>
                                                <tfoot>
                                                  <tr>
                                                <td colspan="4"><div align='right'><b>TOTAL PENANGANAN</b></div></td>
                                                      <td><?php echo $jmlhhsl;?></td>

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
<?php
}
?>