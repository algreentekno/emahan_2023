<?php
include "../../../config/koneksi_li.php";
?>

<div class="table-responsive">
                                            <table width="100%" class="nowrap greyGridTable" data-export-title="Export">
                                            <thead>
                                                    <tr>
                                                        <th>Kode Kabupaten</th>
                                                        <th>Nama Kabupaten</th>
                                                        <th>Kode Kecamatan</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Kode Kelurahan</th>
                                                        <th>Nama Kelurahan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
$sql= "SELECT * FROM kelurahan a inner join kecamatan b on a.kode_kec=b.kode_kec inner join kota c on b.kode_kota=c.kode_kota where b.kode_kec='$_POST[kode_kec]'"; 
$hasil = mysqli_query($koneksi,$sql);
while ($data = mysqli_fetch_array($hasil)) {
?>
                                                    <tr>
                                                    <td><?php echo $data['kode_kota'];?></td>
                                                     <td><div align="left"><?php echo $data['nama_kota'];?></div></td>   
                                                    
                                                     <td><?php echo $data['kode_kec'];?></td>
                                                     <td><div align="left"><?php echo $data['nama_kecamatan'];?></div></td>   
                                                    
                                                     <td><?php echo $data['kode_kel'];?></td>
                                                     <td><div align="left"><?php echo $data['nama_kelurahan'];?></div></td>   
                                                    </tr>
                                                    <?php 
}
?> 
                                                    
                                                </tbody>
                                            </table>
                                        </div>
