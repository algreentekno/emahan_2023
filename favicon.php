<?php
$sql2 = mysqli_query($koneksi,"select favicon from identitas LIMIT 1");
$j2   = mysqli_fetch_array($sql2);
echo "$j2[favicon]"; 
?>
