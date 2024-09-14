<?php
session_start();
include "../config/koneksi_li.php";
$kodekota=$_POST['kodekota'];
$kodekec=$_POST['kodekec'];
$tahundata=$_POST['tahundata'];
if($kodekota!='' AND $kodekec==''){
    $sql1k= "SELECT * from kota where kode_kota='$kodekota'"; 
    $hasil1k = mysqli_query($koneksi,$sql1k);
    $dtahsl=mysqli_fetch_array($hasil1k);
    $kota=$dtahsl['nama_kota'];
?>
<div class="table-responsive">
                                        <table width="100%" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th rowspan="2">Kabupaten/Kota</th>
                                                      <th rowspan="2">Kecamatan</th>
                                                      <th width="14%" rowspan="2">Tahun Pendataan</th>
                                                      <th colspan="2">Berdasarkan Kepemilikan</th>
                                                    </tr>
                                                    <tr>
                                                      <th width="16%">Tanah Milik Sendiri</th>
                                                      <th width="14%">Rumah Milik Sendiri</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $sql1= "SELECT * from  kecamatan where kode_kota='$kodekota'"; 
                                                    $hasil1 = mysqli_query($koneksi,$sql1);
                                                    while ($dataout=mysqli_fetch_array($hasil1)){
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $kota;?></td>
                                                    <td><?php echo $dataout['nama_kecamatan'];?></td>
                                                    <td><?php echo $tahundata;?></td>
                                                    <td> <?php 
                                                    $sql1m= "SELECT count(*) as jmlh from rtlh where kode_kec='$dataout[kode_kec]' and sts_kepemilikan_rumah='MILIK SENDIRI' and tahun_input_data='$tahundata'"; 
                                                    $hasil1m = mysqli_query($koneksi,$sql1m);
                                                    $dataoutm=mysqli_fetch_array($hasil1m);
                                                    $hsl=$dataoutm['jmlh'];
                                                    echo $hsl;
                                                    ?></td>
                                                    <td> <?php 
                                                    $sql1mn= "SELECT count(*) as jmlh from rtlh where kode_kec='$dataout[kode_kec]' and sts_kepemilikan_tanah='MILIK SENDIRI' and tahun_input_data='$tahundata'"; 
                                                    $hasil1mn = mysqli_query($koneksi,$sql1mn);
                                                    $dataoutmn=mysqli_fetch_array($hasil1mn);
                                                    $hsln=$dataoutmn['jmlh'];
                                                    echo $hsln;
                                                    ?></td>    
                                                    </tr>
                                                   <?php
                                                    $jmlhhsl +=$hsl;
                                                    $jmlhhsln +=$hsln;
                                                    }
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <td colspan="3"><div align="right">JUMLAH DATA</div></td>
                                                    <td><?php echo $jmlhhsl;?></td>
                                                    <td><?php echo $jmlhhsln;?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
<?php
}elseif($kodekota!='' AND $kodekec!=''){
    $sql1kk= "SELECT * from kota where kode_kota='$kodekota'"; 
    $hasil1kk = mysqli_query($koneksi,$sql1kk);
    $dtahslk=mysqli_fetch_array($hasil1kk);
    $kota=$dtahslk['nama_kota'];

    $sql1k= "SELECT * from kecamatan where kode_kec='$kodekec'"; 
    $hasil1k = mysqli_query($koneksi,$sql1k);
    $dtahsl=mysqli_fetch_array($hasil1k);
    $kecamatan=$dtahsl['nama_kecamatan'];
?>
<div class="table-responsive">
                                        <table width="100%" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                      <th rowspan="2">Kabupaten/Kota</th>
                                                      <th rowspan="2">Kecamatan</th>
                                                      <th rowspan="2">Kelurahan/Desa</th>
                                                      <th width="14%" rowspan="2">Tahun Pendataan</th>
                                                      <th colspan="2">Berdasarkan Kepemilikan</th>
                                                    </tr>
                                                    <tr>
                                                      <th width="16%">Tanah Milik Sendiri</th>
                                                      <th width="14%">Rumah Milik Sendiri</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                     $sql1= "SELECT * from  kelurahan where kode_kec='$kodekec'"; 
                                                     $hasil1 = mysqli_query($koneksi,$sql1);
                                                     while ($dataout=mysqli_fetch_array($hasil1)){
                                                  ?>
                                                    <tr>
                                                    <td><?php echo $kota;?></td>
                                                    <td><?php echo $kecamatan;?></td>
                                                    <td><?php echo $dataout['nama_kelurahan'];?></td>
                                                    <td><?php echo $tahundata;?></td>
                                                    <td> <?php 
                                                    $sql1m= "SELECT count(*) as jmlh from rtlh where kode_kel='$dataout[kode_kel]' and sts_kepemilikan_rumah='MILIK SENDIRI' and tahun_input_data='$tahundata'"; 
                                                    $hasil1m = mysqli_query($koneksi,$sql1m);
                                                    $dataoutm=mysqli_fetch_array($hasil1m);
                                                    $hsl=$dataoutm['jmlh'];
                                                    echo $hsl;
                                                    ?></td>
                                                    <td> <?php 
                                                    $sql1mn= "SELECT count(*) as jmlh from rtlh where kode_kel='$dataout[kode_kel]' and sts_kepemilikan_tanah='MILIK SENDIRI' and tahun_input_data='$tahundata'"; 
                                                    $hasil1mn = mysqli_query($koneksi,$sql1mn);
                                                    $dataoutmn=mysqli_fetch_array($hasil1mn);
                                                    $hsln=$dataoutmn['jmlh'];
                                                    echo $hsln;
                                                    ?></td>    
                                                    </tr>
                                                   <?php
                                                    $jmlhhsl +=$hsl;
                                                    $jmlhhsln +=$hsln;
                                                    }
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <td colspan="4"><div align="right">JUMLAH DATA</div></td>
                                                    <td><?php echo $jmlhhsl;?></td>
                                                    <td><?php echo $jmlhhsln;?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
<?php
}
?>