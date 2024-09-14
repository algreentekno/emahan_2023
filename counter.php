<?php
  
  $ip   = $_SERVER['REMOTE_ADDR'];
   $tanggal = date("Ymd");
   $waktu  = time();
   $bln=date("m");
   $tgl=date("d");
   $blan=date("Y-m");
   $thn=date("Y");
   $tglk=$tgl-1;

              $s = mysqli_query($koneksi,"SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");

              if(mysqli_num_rows($s) == 0){
                mysqli_query($koneksi,"INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
              } 
              else{
                mysqli_query($koneksi,"UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
              }
     if($tglk=='1' | $tglk=='2' | $tglk=='3' | $tglk=='4' | $tglk=='5' | $tglk=='6' | $tglk=='7' | $tglk=='8' | $tglk=='9'){
    $kemarin=mysqli_query($koneksi,"SELECT * FROM statistik WHERE tanggal='$thn-$bln-0$tglk'");
     } else {
    $kemarin=mysqli_query($koneksi,"SELECT * FROM statistik WHERE tanggal='$thn-$bln-$tglk'");
     }
     $bulan=mysqli_query($koneksi,"SELECT * FROM statistik WHERE tanggal LIKE '%$blan%'");
     $bulan1=mysqli_num_rows($bulan);
     $tahunini=mysqli_query($koneksi,"SELECT * FROM statistik WHERE tanggal LIKE '%$thn%'");
     $tahunini1=mysqli_num_rows($tahunini);
              $pengunjung       = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
              $totalpengunjung  = mysqli_result(mysqli_query($koneksi,"SELECT COUNT(hits) FROM statistik"), 0); 
              $hits             = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal")); 
              $totalhits        = mysqli_result(mysqli_query($koneksi,"SELECT SUM(hits) FROM statistik"), 0); 
              $bataswaktu       = time() - 300;
              $pengunjungonline = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM statistik WHERE online > '$bataswaktu'"));
     $kemarin1 = mysqli_num_rows($kemarin);


echo " <table width='100%' border='0'>
                                                <tbody><tr>
                          <td width='32' align='right' valign='middle'><img src='gambar/hariini.png' width='16' height='16'></td>
                          <td width='98' align='left' valign='middle'> Hari Ini</td>
                          <td width='138' align='left' valign='middle'>:
                              $pengunjung</td>
                        </tr>
                        <tr>
                          <td align='right' valign='middle'><img src='gambar/hariini.png' width='16' height='16'></td>
                          <td align='left' valign='middle'>Kemarin</td>
                          <td align='left' valign='middle'>:
                            $kemarin1</td>
                        </tr>
                        <tr>
                          <td align='right' valign='middle'><img src='gambar/hariini.png' width='16' height='16'></td>
                          <td align='left' valign='middle'>Bulan ini </td>
                          <td align='left' valign='middle'> :
         $bulan1</td>
                        </tr>
                        <tr>
                          <td align='right' valign='middle'><img src='gambar/hariini.png' width='16' height='16'></td>
                          <td align='left' valign='middle'>Tahun ini </td>
                          <td align='left' valign='middle'>:
                              $tahunini1</td>
                        </tr>
                        <tr>
                          <td align='right' valign='middle'><img src='gambar/total.png' width='16' height='16'></td>
                          <td width='98' align='left' valign='middle'>Total</td>
                          <td width='138' align='left' valign='middle'>:
                              $totalhits</td>
                        </tr>
                        <tr>
                          <td align='right' valign='middle'><img src='gambar/total.png' width='16' height='16'></td>
                          <td align='left' valign='middle'>Hits Count </td>
                          <td align='left' valign='middle'>:
                              $hits[hitstoday]</td>
                        </tr>
<tr>
                          <td align='right' valign='middle'><img src='gambar/online.png' width='16' height='16'></td>
                          <td width='98' align='left' valign='middle'>Now Online</td>
                          <td width='138' align='left' valign='middle'>:
                              <b>$pengunjungonline</b> User</td>
              </tr>
            </tbody></table>";
          

?>